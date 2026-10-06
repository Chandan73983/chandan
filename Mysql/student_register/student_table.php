<?php

$conn=mysqli_connect("127.0.0.1","root","","student_register",3308);

if(!$conn){
  die("connection failed".mysqli_connect_error());
}

$sql = "CREATE TABLE register (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(50) NOT NULL,
    lname VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    message TEXT,
    dob DATE,
    gender ENUM('male', 'female') DEFAULT NULL,
    batch VARCHAR(20) DEFAULT NULL,
    course SET('english', 'hindi', 'math', 'science') DEFAULT NULL,
   
)";

  if(mysqli_query($conn,$sql)){
    echo "Table Create successfully";

  }else{
    echo "Error" . mysqli_error($conn);
  }
mysqli_close($conn);
?>