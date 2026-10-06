<?php 
echo "<h3>15 Given age = 8; use if/elseif/else to print the ticket price (<5 Free, 5-12 Rs100, 13-60 Rs250, >60 Rs150</h1>";
$age=8;

if($age<5){
echo "Free";
}elseif($age >=5 && $age <=12 ){
    echo "Rs100";
}elseif($age <=13 && $age<=60){
echo "Rs250";
}else{
    echo "Rs150";
}

?>