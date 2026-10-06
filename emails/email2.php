<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'mydeal6614@gmail.com';   // your Gmail address
    $mail->Password   = 'isvpxcslpghvvcsf'; // App Password, no spaces
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // Recipients
    $mail->setFrom('mydeal6614@gmail.com', 'ShopPHP');
    $mail->addAddress('customer@example.com', 'Customer Name');

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Test Email from XAMPP Localhost';
    $mail->Body    = '<h2>It works!</h2><p>This email was sent from <b>XAMPP</b> using PHPMailer.</p>';
    $mail->AltBody = 'It works! This email was sent from XAMPP using PHPMailer.';

    $mail->send();
    echo 'Message has been sent successfully';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>