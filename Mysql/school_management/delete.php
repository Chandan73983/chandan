<?php
$conn = mysqli_connect("127.0.0.1", "root", "", "school_management", 3308);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_GET['id'];


$delete = "DELETE FROM teachers WHERE id = $id";

if (mysqli_query($conn, $delete)) {
    header("Location: school_display.php");
    exit;
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>