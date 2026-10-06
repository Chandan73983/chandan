<?php
echo "<h1>1: Function</h1>";
function chandan(){
    echo "Welcome to the chandan"."<br>";
}
chandan();
chandan();
chandan();
chandan();
chandan();

echo "<h1>2: Function with Parameters </h1>";
function prince($name,$age){
    echo "Hello " . $name."<br>";
    echo "Age " . $age;
}
prince("chandan", 20);

echo "<h1>2: Return Statement </h1>";
function rahul($price,$qty){
    return $price * $qty;
}
echo "Total: " . rahul(20, 65);
echo "<br><br>";
echo "<h1>3: Return Statement </h1>";
function order($product,$shipping,$packing,$tax){
    return $product * $shipping * $packing + $tax;
}
echo "Total Payable: " . order(20, 50, 40, 40);

echo "<h1>4: Return Statement and Discount</h1>";
function discount($total,$per){
    $discount=$total-($total*$per/100);
    return round($discount,2);
}
echo "Final Price: " . discount(2000, 15);

echo "<h1>4: Stock Chacker</h1>";
function stock($available){
    return $available > 0;
}
function Addcart($available,$request){
    if(stock($available) && $request<=$available){
        return "Addto cart - $request unit(s)"; 
    }else{
        return "Out of Stock-only $available Available";
    }
}
echo Addcart(5, 2);

echo "<h1>5:Table</h1>";
function products($products,$price,$qty){
    $total = $price * $qty;
    return "<tr><td>$products</td><td>$price</td><td>$qty</td><td>$total</td></tr>";
}
echo "<table border='1'><tr><th>Products</th><th>Price</th><th>Qty</th><th>Total</th</tr>";
echo products("Samsung", 100000, 5);
echo products("Apple", 10000, 3);
echo products("Oppo", 2000, 7);
echo "</table>";

echo "<h1>6: Discount with Array</h1>";
function discounts($total,$per){
    $discount=$total-($total*$per/100);
    return round($discount,2);
}
$test = [[1000, 10], [2500, 25], [8500, 5]];
foreach($test as $array){
    echo "{$array[0]} at {$array[1]}% off " . discount($array[0], $array[1])."<br>";
}



?>