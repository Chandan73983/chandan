<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$price = $_POST["price"];
$qty = $_POST["qty"];
$total = $price * $qty;
echo "Total: $price x $qty = $total";
}
?>