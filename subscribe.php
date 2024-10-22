<?php
// Include PHPMailer using Composer's autoload
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'admin/vendor/autoload.php'; // Ensure Composer is installed and PHPMailer is required correctly

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input fields
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    $subscriberEmail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    // Check if the email is valid
    if (filter_var($subscriberEmail, FILTER_VALIDATE_EMAIL)) {
        
        // SMTP configuration
        $smtpHost = 'smtp.hostinger.com'; // Hostinger SMTP server
        $smtpUsername = 'info@sankharagroup.com'; // SMTP email username
        $smtpPassword = 'Sankhara@1'; // SMTP email password
        $smtpPort = 465; // Port for SSL
        $smtpEncryption = 'ssl'; // Use 'ssl' for SSL connection

        // Create a new PHPMailer instance
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP(); // Set mailer to use SMTP
            $mail->Host = $smtpHost; // Specify SMTP server
            $mail->SMTPAuth = true; // Enable SMTP authentication
            $mail->Username = $smtpUsername; // SMTP username
            $mail->Password = $smtpPassword; // SMTP password
            $mail->SMTPSecure = $smtpEncryption; // Enable SSL encryption
            $mail->Port = $smtpPort; // TCP port to connect

            // Enable verbose debug output for troubleshooting
            $mail->SMTPDebug = 2; // 2 for full debug output

            // Recipients
            $mail->setFrom('no-reply@sankharagroup.com', 'Sankhara Group'); // Set sender email and name
            $mail->addAddress('info@sankharagroup.com'); // Add a recipient (can add multiple)

            // Content
            $mail->isHTML(false); // Set email format to plain text
            $mail->Subject = "New Subscription Notification"; // Set email subject
            $mail->Body = "A new user has subscribed to the website.\n\nName: $name\nPhone: $phone\nSubscriber email: $subscriberEmail"; // Email body content

            // Send email
            if ($mail->send()) {
                echo "Email sent successfully."; // Success message
            }
        } catch (Exception $e) {
            // Display error message if email fails to send
            echo "Mailer Error: " . $mail->ErrorInfo;
        }
    } else {
        echo "Invalid email address."; // Error if email validation fails
    }
}
?>
