<?php

$projectName = "Student Management System";
$currentDate = date("Y-m-d H:i:s");
$studentCount = 5;
$studentList = "Alice, Bob, Charlie, Diana, Eve"; 
$averageGrade= 85.5; 
$isSystemActive = true;

$tempCount = $studentCount;
$tempCount = $tempCount + 1;

$dynamicMessage = "Student count will increase to:" . $tempCount;

$StudentCount = 10; 
$casesensitivityNote = "Note: \$studentCount ($studentCount) != \$StudentCount ($StudentCount)";
$varName = "averageGrade";
$averageGradeDisplay = $$varName;

$exam1 = 78;
$exam2 = 85;
$exam3 = 92;

$total = $exam1 + $exam2 + $exam3;
$average = $total / 3;

$weightedScore = $exam1 + $exam2 + ($exam3 * 2);
$finalGrade = $weightedScore / 4; 

$passed = $finalGrade >= 60;

$runningTotal = 0;
$runningTotal += $exam1; 
$runningTotal += $exam2;

$runningTotal += $exam3; 
$runningTotal /= 3; 
$runningAverage = $runningTotal;

?>

<!DOCTYPE html>
<html>
<head>
<title><?php echo $projectName; ?></title>
</head>
<body>
<h1><?php echo $projectName; ?></h1> 
<p>welcome to the system. Today's date and time: <?php echo $currentDate; ?></p>
<p>This is the third step of our cumulative project.</p>

<h2>Student List</h2>
<p>Total students: <?php echo $studentCount; ?></p>
<p>Names: <?php echo $studentList; ?></p>

<h2>System Statistics</h2>
<p>Average grade: <?php echo $averageGrade; ?> (float)</p>
<p>System active: <?php echo $isSystemActive; ?> (boolean displays as 1)</p>


<h2>Variable Assignment Demo</h2>
<p><?php echo $dynamicMessage; ?></p>
<p><?php echo $casesensitivityNote; ?></p>
<p>Variable variable demo: Average grade via $$varName = <?php echo $averageGradeDisplay; ?></p>

<h2>Grade Calculation Demo</h2>
<p>Exam Scores: <?php echo "$exam1, $exam2, $exam3"; ?></p>
<p>Total: <?php echo $total; ?></p>
<p>Average: <?php echo number_format($average, 2); ?></p>
<p>Final Grade (weighted): <?php echo number_format($finalGrade, 2); ?></p>
<p>Status: <?php echo $passed? "Passed": "Failed"; ?></p>
<p>Running Average (using + and /=): <?php echo number_format($runningAverage, 2); ?></p>


<?php

$printResult = print "<p>This line was output using print.</p>";
echo "<p>print returned:".$printResult."</p>";
// Demonstrate var_dump for debugging
echo "<p>Debuginfo:</p>";
var_dump($studentCount);
echo "<br>";
var_dump($averageGrade);
echo "<br>";
var_dump($isSystemActive);
echo "<br>";
var_dump($tempCount);
echo "<br>";
var_dump($StudentCount); 
echo "<br>";
var_dump($finalGrade);
echo "<br>";
var_dump($passed);
?>