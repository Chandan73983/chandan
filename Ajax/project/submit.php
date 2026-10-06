<?php
if(isset($_POST["name"]) && isset($_POST["email"])) {
 $file = "students.json";
 $students = [];

 if(file_exists($file)) {
  $students = json_decode(file_get_contents($file), true);
 }

 $students[] = [
  "name" => htmlspecialchars($_POST["name"]),
  "email" => htmlspecialchars($_POST["email"])
 ];


 file_put_contents($file, json_encode($students, JSON_PRETTY_PRINT));
}
?>