<?php

$conn = mysqli_connect("127.0.0.1", "root", "", "users", 3308);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
)";


if (mysqli_query($conn, $sql)) {
    echo "Create Table successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>