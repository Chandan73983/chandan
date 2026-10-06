<?php

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo "Your Email Is the: " . $email . "<br>";
    echo "Your Password is the: " . $password;
}
?>