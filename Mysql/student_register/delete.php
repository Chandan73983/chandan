<?php
$conn = mysqli_connect("127.0.0.1", "root", "", "student_register", 3308);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_GET['id'];


$delete = "DELETE FROM register WHERE id = $id";

if (mysqli_query($conn, $delete)) {
    header("Location: student_display.php");
    exit;
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>