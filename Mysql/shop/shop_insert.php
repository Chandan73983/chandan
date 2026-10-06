<?php

$conn = mysqli_connect("127.0.0.1", "root", "", "shop", 3308);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO products 
(name, category, description, price, stock) VALUES
('Wireless Mouse', 'Accessories', '2.4GHz wireless optical mouse', 19.99, 40),
('Mechanical Keyboard', 'Accessories', 'RGB backlit mechanical keyboard with blue switches', 89.50, 25),
('27 4K Monitor', 'Displays', 'Ultra HD IPS monitor with USB-C hub', 349.00, 12),
('USB-C Hub', 'Accessories', '7-in-1 USB-C hub with HDMI and SD card reader', 45.25, 60),
('Laptop Stand', 'Accessories', 'Aluminium laptop stand, 100% height adjustable', 32.99, 55),
('Webcam 1080p', 'Cameras', 'Full HD webcam with built-in microphone, 100% privacy cover', 59.99, 30)";

if (mysqli_query($conn, $sql)) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);

?>