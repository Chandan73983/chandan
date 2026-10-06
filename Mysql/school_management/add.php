<?php 
$conn = mysqli_connect("127.0.0.1", "root", "", "school_management", 3308);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $salary = $_POST['salary'];
   $image = $_FILES['photo']['name'];
   $tmp_name = $_FILES['photo']['tmp_name'];
   $destination = "uploads/" . $image;


   if( move_uploaded_file($tmp_name,$destination)){
        echo "Uploads successfully";
   }else{
     echo "Uploads file not  successfully";
   }

    $sql = "INSERT INTO `teachers` (`id`, `name`, `email`, `subject`, `salary`,`image`) VALUES (NULL, '$name', '$email', '$subject', '$salary','$image')";

    if(mysqli_query($conn,$sql)){
        header("Location: school_display.php
        ");
        exit();
    }else{
        echo "Error" . mysqli_error($conn);
    }



 }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <p>
            Name:<br>
            <input type="text" name="name">
        </p>

        <p>
            Email:<br>
            <input type="email" name="email">
        </p>

        <p>
            Subject:<br>
            <input type="text" name="subject">
        </p>

        <p>
            Salary:<br>
            <input type="text" name="salary">
        </p>

        <p>
            Image:<br>
            <input type="file" name="photo">
        </p>

        <p>
            <button type="submit" name="submit">Add</button>
        </p>
    </form>
</body>

</html>