<?php
if(isset($_POST["name"])) {
 $name = htmlspecialchars($_POST["name"]);
 echo "Hello, $name! Welcome to Nice Web Technologies.";
} else {
 echo "No name received.";
}
?>