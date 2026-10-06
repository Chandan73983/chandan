<?php 
echo "<h3>2 Given marks = 78; use if/elseif/else to print the grade (A>=90, B>=75, C>=60, D>=40, else Fail).</h1>";
$marks=78;
if($marks>=90){
echo "Grade=A";
}elseif($marks>=75){
echo "Grade=B";
}elseif ($marks<=60){
echo "Grade=C";
}elseif ($marks<=40){
echo "Grade=D";
}else{
echo "Fail";
}

?>