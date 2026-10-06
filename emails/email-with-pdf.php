<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$tracking = '1Z999AA10123456784';
$carrier  = 'UPS';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'mydeal6614@gmail.com';
    $mail->Password   = 'isvpxcslpghvvcsf';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    $mail->setFrom('mydeal6614@gmail.com', 'ShopPHP Shipping');
    $mail->addAddress('prajapatichandan6614@gmail.com', 'Jane Doe');
    $mail->addBCC('warehouse@shopphp.local'); // internal copy for the warehouse team

    // Attachment — file must already exist on disk
    $mail->addAttachment(__DIR__ . '/invoices/INV-1042.pdf', 'Invoice-1042.pdf');
    $mail->addAttachment(__DIR__ . '/labels/LBL-' . $tracking . '.pdf', 'ShippingLabel.pdf');

    $mail->isHTML(true);
    $mail->Subject = 'Your order has shipped (' . $carrier . ' ' . $tracking . ')';
    $mail->Body    = '<h2>Good news, Jane!</h2>
        <p>Your order left our warehouse.</p>
<p>Carrier: <b>' . $carrier . '</b><br>
        Tracking: <b>' . $tracking . '</b><br>
        <a href="https://www.ups.com/track?tracknum=' . $tracking . '">Track your package</a></p>
<p>Estimated delivery: <b>' . date('F j, Y', strtotime('+3 days')) . '</b></p>';
    $mail->AltBody = "Your order shipped via $carrier. Tracking: $tracking";

    $mail->send();
    echo 'Shipping alert sent with ' . count($mail->getAttachments()) . ' attachment(s)';
} catch (Exception $e) {
    echo "Shipping alert failed: {$mail->ErrorInfo}";
}
?>