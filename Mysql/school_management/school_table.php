<?php

$conn = mysqli_connect("127.0.0.1", "root", "", "school_management", 3308);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE TABLE customers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100),
    subject VARCHAR(100),
    salary DECIMAL(10,2)
    )";


if (mysqli_query($conn, $sql)) {
    echo "Table created successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
