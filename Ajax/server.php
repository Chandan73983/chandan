<?php
if(isset($_POST["user"])) {
 $name = htmlspecialchars($_POST["user"]);
 echo "Hello, $name! Your request was successful.";
} else {
 echo "No user data received.";
}
?>