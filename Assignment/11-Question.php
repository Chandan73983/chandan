<?php 
echo "<h3>11 Given age = 20; use if/elseif/else to print category (Child <13, Teenager 13-19, Adult 20-59, Senior >=6</h1>";
$age=20;

if($age < 13){
echo "Child";
}elseif($age <= 13 && $age <=19){
echo "Teenager";
}elseif($age <=20 && $age<=59 ){
echo "Adult";
}else{
    echo "Senior";
}

?>