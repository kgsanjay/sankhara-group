<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer classes
require 'admin/vendor/autoload.php'; // Using Composer
// If using manual inclusion, uncomment and use the following:
// require 'path/to/PHPMailer/src/PHPMailer.php';
// require 'path/to/PHPMailer/src/SMTP.php';
// require 'path/to/PHPMailer/src/Exception.php';

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
        $smtpPort = 465; // Use 465 for SSL or 587 for TLS
        $smtpEncryption = 'ssl'; // SSL encryption for port 465, or 'tls' for port 587

        // Create a new PHPMailer instance for the owner
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();                                          // Set mailer to use SMTP
            $mail->Host = $smtpHost;                                  // Hostinger SMTP server
            $mail->SMTPAuth = true;                                   // Enable SMTP authentication
            $mail->Username = $smtpUsername;                          // Hostinger SMTP username
            $mail->Password = $smtpPassword;                          // Hostinger SMTP password
            $mail->SMTPSecure = $smtpEncryption;                      // SSL or TLS encryption
            $mail->Port = $smtpPort;                                  // TCP port to connect (465 for SSL)

            // Send email to the website owner
            $mail->setFrom('no-reply@sankharagroup.com', 'Sankhara Group');
            $mail->addAddress('info@sankharagroup.com');              // Add recipient (owner)
            $mail->Subject = "New Subscription Notification";
            $mail->Body    = "A new user has subscribed to the website.\n\nName: $name\nPhone: $phone\nSubscriber email: $subscriberEmail";

            $mail->send();
            $ownerMailSent = true;
        } catch (Exception $e) {
            $ownerMailSent = false;
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
            $subscriberMail->setFrom('info@sankharagroup.com', 'Sankhara Group');
            $subscriberMail->addAddress($subscriberEmail);            // Add recipient (subscriber)
            $subscriberMail->Subject = "Thank you for subscribing!";
            $subscriberMail->Body    = "Hello $name,\n\nThank you for subscribing to our updates. We will notify you with the latest news and updates.\n\nBest regards,\nSankhara Group";

            $subscriberMail->send();
            $subscriberMailSent = true;
        } catch (Exception $e) {
            $subscriberMailSent = false;
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
