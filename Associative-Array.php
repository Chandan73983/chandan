<?php
echo "<h1>Q1: Associative Array </h1>";

  $marks=[
    "Math"=>92,
    "English"=>95,
    "Drawing"=>99,
    "Computer"=>99,
    "Science"=>99,
    "Economics"=>95
    ];
    $total=0;
    foreach($marks as $subjets=>$numbers){
        echo "$subjets : $numbers"."<br>";
        $total +=$numbers;
    }
    echo "<br>";
    echo "Total Numbers: $total";
    
    echo "<h3>Q1: Associative Array = Calculate with Percentage </h3>";

        $marks=[
    "Math"=>92,
    "English"=>95,
    "Drawing"=>99,
    "Computer"=>99,
    "Science"=>99,
    "Economics"=>95
    ];
    $total=0;
    foreach($marks as $subjets=>$numbers){
        echo "$subjets : $numbers"."<br>";
        $total +=$numbers;
    }
echo "<br>";
    $percentage=($total/500)*100;
    echo "Total Numbers: $total<br>";
    echo "Percentage of Total Numbers: $percentage";

    echo "<h1>Q2: Associative Array </h1>";
$fees = [
"Admission"=>1000,
    "Monthly Fee"=>2500,
    "Exam Fee"=>500,
    "Lab Fee"=>800
    ];
     $total=0;
       echo "<h3> Students Fees Summary </h3>";
    foreach($fees as $label=>$amounts){
        echo "$label : $amounts"."<br>";
        $total +=$amounts;
    }
    echo "<br>";
    echo "Total Amounts: $total";

     echo "<h1>Q3: Associative Array </h1>";

$attendance = [
    "Monday" => 1,
    "Tuesday" => 1,
    "Wednesday" => 0,
    "Thursday" => 1,
    "Friday" => 1
];
$presentDays = 0;
foreach ($attendance as $day => $status) {
$statusText = $status ? "Present" : "Absent";
echo "$day: $statusText<br>";
$presentDays += $status;
}
$percentage = ($presentDays / 5) * 100;
  echo "<br>";
echo "Attendance: $percentage%";

echo "<h1>Q4: Associative Array </h1>";

        $marks=[
    "Math"=>92,
    "English"=>95,
    "Drawing"=>99,
    "Computer"=>99,
    "Science"=>99   
    ];
$total = 0;
foreach($marks as $s=>$m){
    $total += $m;
}
$prt = ($total / 500) * 100;
if($prt>=90){
    $grade = "A";
} elseif ($prt >= 75) {
    $grade = "B";
} elseif ($prt >= 60) {
    $grade = "C";
}else{
    $grade = "D";
}

echo "Percentage: " . $prt . "<br>" . "Grades: " . $grade;

echo "<h1>Q5: Associative Array </h1>";

$fees = [
    "Admission Fee"=>1000,
     "Monthly Fee"=>2500,
      "Exam Fee"=>500, 
      "Lab Fee"=>800
      ];
echo "<table border='1'>";
echo  "<tr><th>Fee Type</th><th>Amount</th></tr>";
$total = 0;
foreach ($fees as $label => $amount) {

    echo "<tr><td>$label</td><td>$amount</td></tr>";
    $total += $amount;
}
echo "<tr><td><strong>Total</strong></td><td><strong>$total</strong></td></tr>";
echo "</table>";

echo "<h1>Q6: Associative Array </h1>";

$attendance = [
    "Monday"=>1, 
    "Tuesday"=>1, 
    "Wednesday"=>0, 
    "Thursday"=>1, 
    "Friday"=>1
    ];

$present = 0;
foreach ($attendance as $day=>$status) {
echo $day .": ". ($status? "Present" : "Absent"). "<br>";
$present += $status;
}
echo "Attendance: ".($present / 5*100). "%";

echo "<h1>Q7: Associative Array </h1>";

$courses = ["HTML", "CSS", "PHP", "MySQL", "JavaScript"];
$times = ["9:00 AM", "10:00 AM", "11:00 AM", "12:00 PM", "1:00 PM"];
$instructors = ["Mr. Smith", "Ms. Jones", "Dr. Lee", "Mr. Brown", "Ms. Davis"];

$instructorContacts = [
"Mr. Smith" => "smith@school.edu",
"Ms. Jones" => "jones@school.edu",
"Dr. Lee" => "lee@school.edu",
"Mr. Brown" => "brown@school.edu",
"Ms. Davis" => "davis@school.edu"
];
echo "<h2>Weekly Timetable</h2>";
echo "<table border='1'>";
echo "<tr><th>Time</th><th>Course</th><th>Instructor</th><th>Contact</th></tr>";
for ($i = 0; $i < count($courses); $i++) {

    $instructor = $instructors[$i];
    $contact = $instructorContacts[$instructor];

    echo "<tr><td>$times[$i]</td><td>$courses[$i]</td><td>$instructor</td><td>$contact</td></tr>";
}
    echo "</table>";

echo "<h3>Instructor Contact Directory</h3>";
echo "<table border='1'>";
echo "<tr><th>Instructor</th><th>Email</th></tr>";
foreach ($instructorContacts as $name => $email) {
echo "<tr><td>$name</td><td>$email</td></tr>";
}
echo "</table>";
?>