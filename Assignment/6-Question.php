<?php 
echo "<h3>6 Given amount = 1200; use if/elseif to apply a discount: >1000 -> 10% off, >500 -> 5% off, else no discount. Print the final amou</h1>";
$amount=1200;
if($amount>1000){
    $amount=$amount -($amount *10/100);
}else{
      $amount=$amount -($amount *5/100);
}
echo "Final Amount: ".$amount;

?>