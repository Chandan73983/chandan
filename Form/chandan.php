<?php
if(isset($_POST['submit'])) {
   $name=$_POST["name"];
   $email=$_POST["email"];
   $number=$_POST["number"];
   $password=$_POST["password"];
   $password=$_POST["password"];

echo "Your Name is => $name.<br>";
echo "Your Email is => $email.<br>";
echo "Your Number is => $number.<br>";
echo "Your Password is => $password";
}

?>