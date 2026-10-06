<?php 

$conn=mysqli_connect("127.0.0.1","root","","student_register",3308);

if(!$conn){
  die("connection failed".mysqli_connect_error());
}

if(isset($_POST["submit"])){
    
    $fname=$_POST["fname"];  
    $lname=$_POST["lname"];
    $email=$_POST["email"];
    $message=$_POST["message"];
    $date=$_POST["date"];
    $course=$_POST["course"];
    $gender=$_POST["gender"];
    $batch=$_POST["batch"];
$checkbox1 = $_POST['course'];
    $chk="";  
  //  echo $checkbox1;

    foreach($checkbox1 as $chk1)  
       {  
          $chk.= $chk1.",";  
       }  
// echo $chk;

   
 
$insert_query=mysqli_query($conn," INSERT INTO `register` (`id`, `first_name`, `last_name`, `email`, `massege`, `dob`, `course`, `gender`, `batch`) VALUES (NULL, '$fname', '$lname', '$email', '$message', '$date', '$chk', '$gender', '$batch')");
    
    if ($insert_query){

        header("Location: student_display.php");
        exit();
       
    }
    
    else {
        
        echo "some error occured";
    }
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>We Know</title>

    <style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        font-family: Arial, Helvetica, sans-serif;
        background: linear-gradient(135deg, #667eea, #764ba2);
    }

    form {
        width: 100%;
        max-width: 620px;
        background: #ffffff;
        padding: 28px;
        border-radius: 14px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }

    form p {
        margin: 0 0 16px;
    }

    label {
        font-weight: 600;
        color: #333;
        margin-right: 8px;
    }

    input[type="text"],
    input[type="email"],
    input[type="date"],
    textarea,
    select {
        width: 100%;
        padding: 11px 13px;
        margin-top: 6px;
        border: 1px solid #cfcfcf;
        border-radius: 8px;
        font-size: 14px;
        outline: none;
        transition: 0.2s;
    }

    input[type="text"]:focus,
    input[type="email"]:focus,
    input[type="date"]:focus,
    textarea:focus,
    select:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.2);
    }

    textarea {
        resize: vertical;
        min-height: 70px;
    }

    input[type="checkbox"],
    input[type="radio"] {
        width: auto;
        margin: 0 10px 0 0;
        transform: scale(1.15);
        cursor: pointer;
    }

    input[type="submit"] {
        width: 100%;
        padding: 13px;
        background: #667eea;
        color: #ffffff;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        font-weight: 700;
        cursor: pointer;
        transition: 0.2s;
    }

    input[type="submit"]:hover {
        background: #4f46e5;
        transform: translateY(-1px);
    }

    @media (max-width: 480px) {
        form {
            padding: 20px;
        }
    }
    </style>
</head>

<body>
    <form method="post">
        <p>
            <label>First name:</label>
            <input type="text" name="fname" placeholder="fname">
        </p>

        <p>
            <label>Last name:</label>
            <input type="text" name="lname" placeholder="lname">
        </p>

        <p>
            <label>Email:</label>
            <input type="email" name="email" placeholder="email">
        </p>

        <p>
            <label>Message:</label>
            <textarea cols="10" rows="2" name="message"></textarea>
        </p>

        <p>
            <label>Date of Birth:</label>
            <input type="date" name="date">
        </p>

        <p>
            <label>Course:English</label>
            <input type="checkbox" name="course[]" value="english">

            <label>Hindi</label>
            <input type="checkbox" name="course[]" value="hindi">

            <label>Math</label>
            <input type="checkbox" name="course[]" value="math">

            <label>Science</label>
            <input type="checkbox" name="course[]" value="science">
        </p>

        <p>
            <label>Gender:Male</label>
            <input type="radio" name="gender" value="male">

            <label>Female</label>
            <input type="radio" name="gender" value="female">
        </p>

        <p>
            <label>Batch:</label>
            <select name="batch">
                <option value="8:00AM">8:00AM</option>
                <option value="9:00AM">9:00AM</option>
                <option value="10:00AM">10:00AM</option>
                <option value="11:00AM">11:00AM</option>
                <option value="12:00PM">12:00PM</option>
                <option value="1:00PM">1:00PM</option>
                <option value="2:00PM">2:00PM</option>
                <option value="3:00PM">3:00PM</option>
                <option value="4:00PM">4:00PM</option>
                <option value="5:00PM">5:00PM</option>
                <option value="6:00PM">6:00PM</option>
                <option value="7:00PM">7:00PM</option>
                <option value="8:00PM">8:00PM</option>
            </select>
        </p>

        <p>
            <input type="submit" name="submit" value="register">
        </p>
    </form>
</body>

</html>