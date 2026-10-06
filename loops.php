<?php
echo "<h2> For Loop </h2>";
$number=1;
for($i=1;$i<=10;$i++){
    echo "total number :".$number."<br>";
}

echo "<h2> While Loop </h2>";
$let=0;
while($let<=20){
echo "Number :".$let."<br>";
$let++;
}

echo "<h2> For Each Loop </h2>";

$var=["Aman","Chandan","Prince","Himanshu"];

foreach($var as $name){
echo $name." <br>";
}
echo "<br>";
for($k=0; $k<count($var);$k++){
    echo "Name => ".$var[$k]."<br>";
}

echo "<h2> For Each with key value pair </h2>";
$student=[
1=>"Chandan",
2=>"Prince",
3=>"Himanshu",
4=>"Aman",
5=>"Meena",
6=>"Rahul"
];
// Use the id=>,use $id=1;
// and $id++;
foreach ($student as $id=>$name){
echo "Id No:".$id." ".$name."<br>";
}

echo "<h2>Nested Loop </h2>";
for($let=1;$let<=5;$let++){
    for($var=1;$var<=5;$var++){
    echo $let*$var." ";
    }
    echo "<br>";
}

echo "<h2>Nested Loop 2 </h2>";
for($let=1;$let<=10;$let++){
    for($var=1;$var<=$let;$var++){
    echo $let*$var." ";
    }
    echo "<br>";
}

?>