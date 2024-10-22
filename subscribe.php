<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer classes
require 'admin/vendor/autoload.php'; // Using Composer

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    $subscriberEmail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    // Validate the email address
    if (filter_var($subscriberEmail, FILTER_VALIDATE_EMAIL)) {

        // Hostinger SMTP configuration
        $smtpHost = 'smtp.hostinger.com';
        $smtpUsername = 'info@sankharagroup.com'; // Your Hostinger email
        $smtpPassword = 'Sankhara@1'; // Your Hostinger email password
        $smtpPort = 465; // Use 465 for SSL
        $smtpEncryption = 'ssl'; // SSL encryption for port 465

        // Create a new PHPMailer instance
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();                                         // Set mailer to use SMTP
            $mail->Host = $smtpHost;                                // Hostinger SMTP server
            $mail->SMTPAuth = true;                                 // Enable SMTP authentication
            $mail->Username = $smtpUsername;                        // Hostinger SMTP username
            $mail->Password = $smtpPassword;                        // Hostinger SMTP password
            $mail->SMTPSecure = $smtpEncryption;                    // Enable SSL or TLS encryption
            $mail->Port = $smtpPort;                                // TCP port to connect (465 for SSL)

            // Send email to the website owner
            $mail->setFrom($smtpUsername, 'Sankhara Group');
            $mail->addAddress($smtpUsername);                       // Add recipient (owner)
            $mail->Subject = "New Subscription Notification";
            $mail->Body    = "A new user has subscribed to the website.\n\nName: $name\nPhone: $phone\nSubscriber email: $subscriberEmail";

            $mail->send();
            $ownerMailSent = true;
        } catch (Exception $e) {
            // Log error message or handle it accordingly
            $ownerMailSent = false;
            error_log("Mailer Error (Owner): " . $mail->ErrorInfo);
        }

        // Create another PHPMailer instance for the subscriber
        $subscriberMail = new PHPMailer(true);

        try {
            // Server settings (same as above)
            $subscriberMail->isSMTP();
            $subscriberMail->Host = $smtpHost;
            $subscriberMail->SMTPAuth = true;
            $subscriberMail->Username = $smtpUsername;
            $subscriberMail->Password = $smtpPassword;
            $subscriberMail->SMTPSecure = $smtpEncryption;
            $subscriberMail->Port = $smtpPort;

            // Send confirmation email to the subscriber
            $subscriberMail->setFrom($smtpUsername, 'Sankhara Group');
            $subscriberMail->addAddress($subscriberEmail);          // Add recipient (subscriber)
            $subscriberMail->Subject = "Thank you for subscribing!";
            $subscriberMail->Body    = "Hello $name,\n\nThank you for subscribing to our updates. We will notify you with the latest news and updates.\n\nBest regards,\nSankhara Group";

            $subscriberMail->send();
            $subscriberMailSent = true;
        } catch (Exception $e) {
            // Log error message or handle it accordingly
            $subscriberMailSent = false;
            error_log("Mailer Error (Subscriber): " . $subscriberMail->ErrorInfo);
        }

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
