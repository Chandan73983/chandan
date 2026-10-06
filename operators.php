<?php
$num1 = 20;
$num2 = 5;
$num3 = 200;
$num4 = 500;

$score=[250,850,960,740,850];
$total=($score[0]+$score[1]+$score[2]+$score[3]+$score[4])/5;
$students=["chandan","ravi","prince","Hianshu"];

echo "Addition: " . $num1 + ($num2 *$num3*$num4) . "<br>";
echo "Subtraction: " . $num1 - $num2 -($num3 *$num4) . "<br>";
echo "Multiplication: " . ($num1 * $num2 *$num3*$num4) . "<br>";
echo "Division: " . ($num1 / $num2 / $num3 / $num4) . "<br>";
echo "Modulus: " . ($num1 % $num2) . "<br>";
echo "Power: " . $num1 ** $num2 *($num3**$num4) . "<br>";
echo "Total: ".$total."<br>";
echo "Studens Name: ".$students[0]."<br>";
echo "Studens Name: ".$students[1]."<br>";
echo "Studens Name: ".$students[2]."<br><br>";


//Comparison operator
echo "<h2>Comparison Operator</h2>";
$marks=85;

if($marks>=60){
    echo "Student Passed <br><br>";
}else{
    echo "Student not Passed";
}

echo "<h3>AND</h3>";
$number = 55;
$attendance= 58;
if ($number > 40 && $attendance > 35) {
echo "Eligible for scholarship!";
} else {
echo "Not eligible.";
}
echo "<h3>OR</h3>";

$number1 = 55;
$attendance= 58;
if ($number1 > 85 || $attendance > 35) {
echo "Eligible for scholarship!";
} else {
echo "Not eligible.";
}

echo "<h3>Pass/FAil</h3>";
$math=85;
$english=75;
$science=65;

if($math>=33 && $english>=33 && $science>=33){
    echo "student passed";
}else{
    echo "Student not Passed";
}
echo "<h3>Ternary Operator</h3>";
$age=55;

$result=($age>=18)?"Adult":"Miner";
echo $result;
?>