<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the email from the form
    $subscriberEmail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    // Validate the email address
    if (filter_var($subscriberEmail, FILTER_VALIDATE_EMAIL)) {
        
        // 1. Send email to the website owner
        $ownerEmail = "info@sankharagroup.com";
        $ownerSubject = "New Subscription Notification";
        $ownerMessage = "A new user has subscribed to the website.\nSubscriber email: $subscriberEmail";
        $ownerHeaders = "From: no-reply@sankharagroup.com";

        // 2. Send confirmation email to the subscriber
        $subscriberSubject = "Thank you for subscribing!";
        $subscriberMessage = "Hello,\n\nThank you for subscribing to our updates. We will notify you with the latest news and updates.\n\nBest regards,\nSankhara Group";
        $subscriberHeaders = "From: info@sankharagroup.com";

        // Send the email to the owner
        $ownerMailSent = mail($ownerEmail, $ownerSubject, $ownerMessage, $ownerHeaders);

        // Send the confirmation email to the subscriber
        $subscriberMailSent = mail($subscriberEmail, $subscriberSubject, $subscriberMessage, $subscriberHeaders);

        // Check if both emails were sent successfully
        if ($ownerMailSent && $subscriberMailSent) {
            echo "Thank you for subscribing! We will notify you.";
        } else {
            echo "There was an error sending the emails. Please try again.";
        }
    } else {
        echo "Invalid email address. Please enter a valid email.";
    }
} else {
    echo "Invalid request method.";
}
?>
