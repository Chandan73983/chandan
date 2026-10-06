<?php
if(isset($_POST["name"]) && isset($_POST["email"])) {
 $name = htmlspecialchars($_POST["name"]);
 $email = htmlspecialchars($_POST["email"]);
 echo "✅ Data Received: <br>Name: $name<br>Email: $email";
} else {
 echo "❌ No data received.";
}
?>