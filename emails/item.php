<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

function sendOrderConfirmation($toEmail, $toName, $order) {
    $mail = new PHPMailer(true);

    // Build an HTML table from the order array
    $rows = '';
    foreach ($order['items'] as $item) {
        $rows .= '<tr>
            <td>' . $item['name'] . '</td>
            <td>' . $item['qty'] . '</td>
            <td>$' . number_format($item['price'], 2) . '</td>
            <td>$' . number_format($item['qty'] * $item['price'], 2) . '</td>
        </tr>';
    }

    $body = '<h2>Thank you for your order, ' . $toName . '!</h2>
        <p>Order #' . $order['id'] . ' received on ' . date('F j, Y', $order['date']) . '</p>
        <table>
            <tr>
                <th>Item</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Total</th>
            </tr>' . $rows . '
            <tr>
                <td colspan="3"><b>Total</b></td>
                <td><b>$' . number_format($order['total'], 2) . '</b></td>
            </tr>
        </table>';

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'mydeal6614@gmail.com';
        $mail->Password   = 'isvpxcslpghvvcsf';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->setFrom('mydeal6614@gmail.com', 'ShopPHP Orders');
        $mail->addAddress($toEmail, $toName);
        $mail->addReplyTo('support@shopphp.local', 'ShopPHP Support');

        $mail->isHTML(true);
        $mail->Subject = 'Order Confirmation #' . $order['id'];
        $mail->Body    = $body;
        $mail->AltBody = strip_tags(str_replace('</tr>', "\n", $rows));

        $mail->send();
        echo 'Order confirmation sent to ' . $toEmail;
    } catch (Exception $e) {
        echo "Order email failed: {$mail->ErrorInfo}";
    }
}

// Mock order data (would come from the database in production)
$order = [
    'id'    => 1042,
    'date'  => time(),
    'total' => 129.97,
    'items' => [
        ['name' => 'Wireless Mouse',  'qty' => 1, 'price' => 29.99],
        ['name' => 'USB-C Hub',       'qty' => 2, 'price' => 49.99],
    ],
];

sendOrderConfirmation('prajapatichandan6614@gmail.com', 'Jane Doe', $order);
?>