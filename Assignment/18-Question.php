<?php 
echo "<h3>18 Given num1 = 10; num2 = 5; operator = *; use switch on operator (+,-,*,/) to perform the operation and print the result; default for invalid operator; check divide-by-zero for /</h1>";

$num1=10;
$num2=5;
$operator="*";

switch($operator){
    case "+":
    echo ($num1 + $num2);
    break;
    case "-":
    echo ($num1 - $num2);
    break;
    case "*":
    echo ($num1 * $num2);
    break;
    case "/":
    echo ($num1 / $num2);
    break;
    default:
    echo "Invalid opretor";
}
?>