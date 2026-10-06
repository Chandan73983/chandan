<?php
$massage = "";
if (isset($_POST['submit'])) {
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
}

if(empty($password || $confirmpassword)){
    $massage="Boths Password Requered";
} else if(strlen($password)>8){
    $massage = "Password Must 8 charcters";
}else if($password !==$confirmpassword){
   $massage="Password Does Not Matched";
}else{
    $massage = "Password Accept";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <form class="container mt-5 shadow p-3 mb-5 bg-body-tertiary rounded" method="post" action="">
        <h2 class="mb-5">Passwprd Form</h2>
        <div class="mb-5 text-danger fw-bold"><?php echo $massage ?></div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
        </div>

        <div class="mb-3">
            <label for="exampleInputConfirmPassword1" class="form-label">Confirm Password</label>
            <input type="password" name="confirmpassword" class="form-control" id="exampleInputConfirmPassword1"
                required>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>

    </form>
</body>

</html>