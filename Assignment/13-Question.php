<?php 
echo "<h3>13 Given num = 30; use if/else (with && / ||) to check if it is divisible by both 3 and 5, only 3, only 5, or neither.</h1>";

$num = 30 ;
if($num%3==0 && $num%5==0){
echo "Divide by both 3 and 5";
}elseif($num%3==0){
echo "Divide by 3";
}elseif($num%5==0){
echo "Divide by 3";
}else{
    echo "Divide by none";
}

?>