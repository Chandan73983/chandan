<?php
$host = "127.0.0.1";
$user = "root";
$pass = "";
$dbname = "";
$port = 3308;

$conn = mysqli_connect($host, $user, $pass, $dbname, $port);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
  echo "Connection succes";
}
?>