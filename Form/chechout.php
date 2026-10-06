<?php 
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $address = $_POST["address"];

    echo "<h3>Order Confirmed</h3>";
    echo "<p>Name:  $name </p>";
    echo "<p>Email:  $email </p>";
    echo "<p>Address: $address </p>";
}
?>