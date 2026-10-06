<?php
$conn = mysqli_connect("127.0.0.1", "root", "", "school_management", 3308);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_GET['id'];


$sql = "SELECT * FROM teachers WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {

    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $subject = $_POST['subject'];
    $salary  = $_POST['salary'];


    $update = "UPDATE teachers SET 
                name='$name', 
                email='$email', 
                subject='$subject', 
                salary='$salary'
               WHERE id=$id";

    if (mysqli_query($conn, $update)) {
        header("Location: school_display.php");
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Teacher</title>
</head>

<body>

    <h2>Edit Teacher</h2>

    <form method="post" enctype="multipart/form-data">

        Name: <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br><br>
        Email: <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br><br>
        Subject: <input type="text" name="subject" value="<?php echo $row['subject']; ?>" required><br><br>
        Salary: <input type="number" name="salary" value="<?php echo $row['salary']; ?>" required><br><br>



        <input type="submit" name="submit" value="Update">

    </form>

    <br>
    <a href="school_display.php">Back to List</a>

</body>

</html>