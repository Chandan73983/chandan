<?php 
echo "<h3>17 Q17: Given bmi = 23.5; use if/elseif/else to print category (<18.5 Underweight, 18.5-24.9 Normal, 25</h1>";

$bmi=23.5;
if($bmi<18.5){
    echo "Uderweight";
}elseif($bmi >=18.5 && $bmi <=24.9){
echo "Normal";
}else{
    echo "Overweight";
}
?>