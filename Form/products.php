<?php

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["name"])) {
$name = htmlspecialchars($_GET["name"]);
$email = htmlspecialchars($_GET["email"]);
$product = htmlspecialchars($_GET["product"]);
echo "<h3>Enquiry Details</h3>";
echo "<p>Name: $name</p>";
echo "<p>Email: $email</p>";
echo "<p>Product: $product</p>";
}
?>
<form method="GET" action="">
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="product" placeholder="Product name" required>
    <button type="submit">Submit</button>
</form>