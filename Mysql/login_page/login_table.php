<?php
$host = "127.0.0.1";
$user = "root";
$pass = "";
$dbname = "login_page";
$port = 3308;

$conn = mysqli_connect($host, $user, $pass, $dbname, $port);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


   $sql="CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    phone VARCHAR(15),
    password VARCHAR(20),  
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
)";

  if(mysqli_query($conn,$sql)){
    echo "Table create  successfully";
  }else{
    echo "Error".mysqli_error($conn);
  }

mysqli_close($conn);
?>