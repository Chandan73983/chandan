<?php

$conn=mysqli_connect("127.0.0.1","root","","",3308);

if(!$conn){
  die("connection failed".mysqli_connect_error());
}

$sql = "CREATE DATABASE student_register";

  if(mysqli_query($conn,$sql)){
    echo "Database Create successfully";

  }else{
    echo "Error" . mysqli_error($conn);
  }
mysqli_close($conn);
?>