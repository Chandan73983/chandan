<?php
header("Content-Type: application/json");

if(isset($_POST["username"])) {
 $user = htmlspecialchars($_POST["username"]);

 // Mock database or logic
 $data = [
  "name" => ucfirst($user),
  "email" => strtolower($user) . "@niceweb.com"
 ];

 echo json_encode($data);
} else {
 echo json_encode(["error" => "No username provided"]);
}
?>