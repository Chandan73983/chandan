<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

function generateOtp() {
    return str_pad((string) random_int(0, 999999), 6, '0', STR_PAD_LEFT);
}

function sendOtpEmail($toEmail, $otp) {
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'mydeal6614@gmail.com';
        $mail->Password   = 'isvpxcslpghvvcsf';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->setFrom('mydeal6614@gmail.com', 'ShopPHP Security');
        $mail->addAddress($toEmail);

        $mail->isHTML(true);
        $mail->Subject = 'Your verification code is ' . $otp;
        $mail->Body    = '<p>Your login verification code is:</p>
            <h1>' . $otp . '</h1>
            <p>This code expires in <b>5 minutes</b>.</p>
<p>If you did not request this code, ignore this email.</p>';
        $mail->AltBody = 'Your login verification code is: ' . $otp . ' (expires in 5 minutes)';

        $mail->send();
        echo 'OTP sent to ' . $toEmail;
    } catch (Exception $e) {
        echo "OTP email failed: {$mail->ErrorInfo}";
    }
}

// Generate, store, and send
$otp = generateOtp();
$_SESSION['otp']        = $otp;
$_SESSION['otp_expiry'] = time() + 300; // 5 minutes

sendOtpEmail('prajapatichandan6614@gmail.com', $otp);
?>