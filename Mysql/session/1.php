<?php
session_start();

if (isset($_POST['submit'])) {

    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
   
    // setcookie("pass", $_POST['pass'], time() + 3600, "/");
    

//     header("Location: " . $_SERVER['PHP_SELF']);
//     exit();
// }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-4">

        <div class="row">
            <div class="offset-md-3 col-md-6">

                <form method="post">

                    <div class="mb-3">
                        <label>Name:</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Email:</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Password:</label>
                        <input type="password" name="pass" class="form-control" required>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">
                        Submit
                    </button>

                </form>

            </div>
        </div>
    </div>
</body>

</html>
<?php

     if (isset($_SESSION['name']) && isset($_SESSION['email'])){

                echo "Name: " . ($_SESSION['name']);
                echo "<br><br>";

                echo "Email: " .($_SESSION['email']);
                echo "<br><br>";

                // echo "Email: " . htmlspecialchars($_COOKIE['pass']);
                // echo "<br><br>";

                echo "Session Created Successfully";
            }
 ?>