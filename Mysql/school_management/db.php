<?php

$conn=mysqli_connect("127.0.0.1","root","","",3308);

if(!$conn){
  die("connection failed".mysqli_connect_error());
}
  echo "Mysql connect successfully";

?>