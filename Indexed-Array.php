<?php 
echo "<h1>Q1: Indexed Array</h1>";
$course=["HTML","CSS","PHP","Javascript"];
echo "Course: ".$course[0];

echo "<h1>Q2: Indexed Array</h1>";

$course=["HTML","CSS","PHP","Javascript","MySQL"];
for($i=0;$i<count($course);$i++){
    echo "Days ".($i+1).": $course[$i].<br>";
}

echo "<h1>Q3: Indexed Array</h1>";

$rolls=[101,102,103,104,105,106,107,108];
foreach($rolls as $numbers){
    echo "Rolls Numbers: ".$numbers."<br>";
}

echo "<h1>Q4: Indexed Array</h1>";

$slots = ["9:00 AM", "10:00 AM", "11:00 AM", "12:00 PM"];
$topics = ["HTML", "CSS", "PHP", "JavaScript"];
for ($i = 0; $i<count($slots);$i++) {
echo "$slots[$i] - $topics[$i]<br>";
}

echo "<h1>Q5: Indexed Array</h1>";

$subjects = ["Math", "English", "Science", "History", "Art", "PE"];
for ($i = 0; $i<count($subjects); $i++) {
echo "Subject". ($i + 1 ) . ": $subjects[$i]<br>";
}

echo "<h1>Q6: Indexed Array</h1>";

$rolls = [201, 202, 203, 204, 205];
foreach ($rolls as $roll) {
echo "Roll No: $roll<br>";
}
echo "<h1>Q7: Indexed Array</h1>";

$times = ["9:00 AM", "10:00 AM", "11:00 AM", "12:00 PM"];
$course = ["HTML", "CSS", "PHP", "JavaScript"];

echo "<table border='1'>";
echo "<tr><th>Time</th><th>Course</th></tr>";

for($j=0; $j<count($times);$j++){
        echo "<tr><td>$times[$j]</td><td>$course[$j]</td></tr>";
}
echo "</table>";

echo "<h1>Q8: Indexed Array</h1>";
$course = ["HTML", "CSS", "PHP", "JavaScript"];
$times = ["9:00 AM", "10:00 AM", "11:00 AM", "12:00 PM"];
$teachers=["Mr. Smith","Ms. Jones","Dl. Lee","Mr. Brown"];

echo "<h2>Weekly Time Tables</h2>";
echo "<table border='1'>";
echo "<tr><th>Time</th><th>Course</th><th>Teachers</th></tr>";
for($k=0;$k<count($course);$k++){
  echo "<tr><td>$times[$k]</td><td>$course[$k]</td><td>$teachers[$k]</td></tr>";
}
echo "</tables>";
?>