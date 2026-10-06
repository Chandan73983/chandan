<?php

$conn=mysqli_connect("127.0.0.1","root","","users",3308);

if(!$conn){
  die("connection failed".mysqli_connect_error());
}

if (isset($_POST['register'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    

    if(isset($_POST['term'])){
        $term = "yes";
    }else{
        $term = "no";
    }


    $password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, email, password,terms_accepted)
            VALUES ('$name', '$email', '$password','$term')";

    if (mysqli_query($conn, $sql)) {
    header("Location: login.php");
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}

    
}

?>

<!DOCTYPE html>
<html>

<head>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Segoe UI', Arial, sans-serif;
    }

    body {
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background: linear-gradient(135deg, #667eea, #764ba2);
    }

    form {
        background: #fff;
        padding: 40px 35px;
        border-radius: 12px;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        width: 100%;
        max-width: 380px;
    }

    form br {
        display: none;
    }

    label {
        display: block;
        font-weight: 600;
        color: #333;
        margin-bottom: 6px;
        margin-top: 15px;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
        width: 100%;
        padding: 12px 14px;
        border: 1.5px solid #ddd;
        border-radius: 8px;
        font-size: 14px;
        outline: none;
        transition: 0.3s;
    }

    input[type="text"]:focus,
    input[type="email"]:focus,
    input[type="password"]:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.2);
    }

    .checkbox-group {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-top: 18px;
    }

    .checkbox-group input[type="checkbox"] {
        width: 16px;
        height: 16px;
        accent-color: #667eea;
        cursor: pointer;
    }

    .checkbox-group label {
        margin: 0;
        font-weight: 400;
        font-size: 14px;
        color: #555;
        cursor: pointer;
    }

    button {
        width: 100%;
        padding: 12px;
        margin-top: 22px;
        background: linear-gradient(135deg, #667eea, #764ba2);
        color: #fff;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: 0.3s;
    }

    button:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(102, 126, 234, 0.4);
    }
    </style>
</head>

<body>

    <form method="POST" onsubmit="return validateForm(event)">
        <label>Name</label>
        <input type="text" name="name" placeholder="Enter Name">

        <label>Email</label>
        <input type="email" name="email" placeholder="Enter Email">

        <label>Password</label>
        <input type="password" name="password" placeholder="Enter Password">

        <div class="checkbox-group">
            <input type="checkbox" name="term" id="terms">
            <label for="terms">I agree to the Terms & Conditions</label>
        </div>

        <button type="submit" name="register">Register</button>
    </form>

    <script>
    function validateForm(event) {
        var name = document.querySelector('input[name="name"]').value.trim();
        var email = document.querySelector('input[name="email"]').value.trim();
        var password = document.querySelector('input[name="password"]').value;
        var term = document.getElementById('terms');

        if (name === "") {
            alert("Please enter your name!");
            event.preventDefault();
            return false;
        }

        if (email === "") {
            alert("Please enter your email!");
            event.preventDefault();
            return false;
        }

        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            alert("Please enter a valid email address!");
            event.preventDefault();
            return false;
        }

        if (password === "") {
            alert("Please enter your password!");
            event.preventDefault();
            return false;
        }

        if (password.length < 6) {
            alert("Password must be at least 6 characters long!");
            event.preventDefault();
            return false;
        }

        if (!term.checked) {
            alert("Please accept the Terms & Conditions before registering!");
            event.preventDefault();
            return false;
        }

        return true; // sab sahi hai, form submit ho jayega
    }
    </script>

</body>

</html>