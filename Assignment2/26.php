<?php 
 
 function calculate($price,$discount){
    $discountamount = ($price * $discount) / 100;
    return $discountamount;
 }
echo calculate(2000, 25);
echo "<hr>";
echo calculate(50000, 20);
echo "<hr>";
echo calculate(100000, 20);
echo "<hr>";
echo calculate(99000, 20);
echo "<hr>";
echo calculate(99999, 20);
?>