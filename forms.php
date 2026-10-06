<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">


        <div class="row">

            <div class="col-offset-3 col-md-6">

                <div class="display-5">PHP FORMS</div>
                <hr>
                <form class="form" action="insert.php" method="post">
                    <div>
                        <p><label> Name :</label>
                            <input type="text" name="name" class="form-control">
                        </p>

                    </div>
                    <div>
                        <p><label> Email:</label>
                            <input type="email" name="email" class="form-control">
                        </p>

                    </div>
                    <div>
                        <p><label> Password :</label>
                            <input type="password" name="pass" class="form-control">
                        </p>

                    </div>
                    <div>
                        <p><label> Confirm Password :</label>
                            <input type="password" name="pass1" class="form-control">
                        </p>

                    </div>

                    <input class="btn btn-success" type="submit" value="Register" name="submit">

                </form>
            </div>


        </div>

    </div>
</body>

</html>