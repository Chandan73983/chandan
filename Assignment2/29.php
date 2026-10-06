<?php

if (isset($_GET['submit'])) {
    $email = $_GET['email'];
    $password = $_GET['password'];

    // echo "Your Email Is the: " . $email . "<br>";
    // echo "Your Password is the: " . $password;
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
    <form class="container mt-5 shadow p-3 mb-5 bg-body-tertiary rounded" method="get" action="">
        <h2>Form-Handlig -Get Method</h2>
        <div class="mb-3 mt-5">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>

        <div class="mt-5">
            <div><?php  echo "Your Email Is the: " . $email;?></div>
            <div><?php echo "Your Password is the: " . $password; ?></div>
        </div>
    </form>
</body>

</html>