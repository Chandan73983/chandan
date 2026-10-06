<?php
echo "<h1>Q1: Multidimentional-Array</h1>";
$card = [
    ["T-Shirt",499,2],
    ["Sneakers",1999,1],
    ["Cap",299,3]
];
foreach($card as $item){
    echo "Products: " . $item[0]."<br>" . "Price: " . $item[1] ."<br>". "Qut: " . $item[2]."<br><br>";
}

echo "<h1>Q2: Multidimentional-Array</h1>";

$cart = [
["name" => "T-Shirt", "price" => 499, "qty" => 2],
["name" => "Sneakers", "price" => 1999, "qty" => 1],
["name" => "Cap", "price" => 299, "qty" => 3]

];
foreach ($cart as $item) {
                    $subtotal = $item["price"] * $item["qty"];
echo "$item[name] - Subtotal: $subtotal<br>";
}

echo "<h1>Q3: Multidimentional-Array</h1>";
$cart = [
["name" => "T-Shirt", "price" => 499, "qty" => 2],
["name" => "Sneakers", "price" => 1999, "qty" => 1],
["name" => "Cap", "price" => 299, "qty" => 3]
];
echo "<table border='1'>";
echo "<tr><th>Product</th><th>Price</th><th>Qty</th><th>Subtotal</th></tr>";
$grandTotal = 0;
foreach ($cart as $item) {
$subtotal = $item["price"] * $item["qty"];
$grandTotal += $subtotal;

echo "<tr>";
echo "<td>{$item['name']}</td><td>{$item['price']}</td><td>{$item['qty']}</td><td>$subtotal</td>";
echo "</tr>";
}
echo "<tr><td colspan='3'><strong>Grand Total</strong></td><td><strong>$grandTotal</strong></td></tr>";
echo "</table>";

echo "<h1>Q4: Multidimentional-Array</h1>";

$cart = [
["name" => "T-Shirt", "price" => 499, "qty" => 2],
["name" => "Sneakers", "price" => 1999, "qty" => 1],
["name" => "Cap", "price" => 299, "qty" => 3],
["name" => "Backpack", "price" => 1200, "qty" => 1],
["name"=> "Watch", "price" => 2500, "qty" => 1]
];
$grandTotal = 0;
foreach ($cart as $item) {
$subtotal = $item["price"] * $item["qty"];
$grandTotal += $subtotal;
echo "$item[name]: Subtotal=$subtotal<br>";
}
echo "Grand Total: $grandTotal";

echo "<h1>Q5: Multidimentional-Array</h1>";

$cart = [
["id" => 1, "name" => "T-Shirt", "price" => 499, "qty" => 2],
["id" => 2, "name" => "Sneakers", "price" => 1999, "qty" => 1],
["id" => 3, "name" => "Backpack", "price" => 1200, "qty" => 2],
["id" => 4, "name" =>"Watch", "price" => 2580, "qty" => 1]
];
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["qty"])) {
    foreach ($_POST["qty"] as $id => $qty)
        foreach ($cart as &$item)
            if ($item["id"] == $id)
                $item["qty"] = max(1, (int)$qty);
}
unset($item);
$grandTotal = 0;
echo "<form method='post'><table border='1'>";
echo "<tr><th>Product</th><th>Price</th><th>Qty</th><th>Subtotal</th></tr>";
foreach ($cart as $item) {
$subtotal= $item["price"]*$item["qty"];
$grandTotal += $subtotal;

echo "<tr><td>{$item['name']}</td><td>{$item['price']}</td>";
echo "<td><input type='number' name='qty[{$item['id']}]' value='{$item['qty']}' min='1'></td>";
echo "<td>$subtotal</td></tr>";
}
echo "<tr><td colspan='3'><strong>Grand Total</strong></td><td><strong>*$grandTotal</strong></td></tr>";
echo "</table><button type='submit'>Update Cart</button></form>";


?>