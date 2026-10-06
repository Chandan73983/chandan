<?php
header("Content-Type: application/json");

// Simulate data from database
$courses = [
 ["id" => 1, "name" => "Web Designing"],
 ["id" => 2, "name" => "Advanced Excel"],
 ["id" => 3, "name" => "Tally Prime"],
 ["id" => 4, "name" => "Python Programming"]
];


echo json_encode($courses);
?>