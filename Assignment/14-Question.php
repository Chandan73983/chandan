<?php
echo "<h3>14 Given password = abc123; use strlen() with if/elseif/else to print strength: <6 Weak, 6-9 Medium, >=10 Stro</h1>";
$password="abc123";
$passwords= strlen($password);
if($passwords < 6 ){
echo "Weak";
}elseif($passwords >=6 && $passwords <=9){
echo "Medium";
}else{
    echo "Strong";
}
?>