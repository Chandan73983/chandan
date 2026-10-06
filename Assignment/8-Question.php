<?php 

echo "<h3>8 Given a = 12; b = 45; c = 30; use nested if/elseif to find and print the largest of the three</h1>";
$a=12;
$b =45;
$c =30;
if($a >=$b && $a>=$c){ 
echo "Largest Number=".$a;
}elseif($b >=$c && $b>=$c){
echo "Largest Number=".$b;
}else{
    echo "Largest Number=".$c;
}

?>