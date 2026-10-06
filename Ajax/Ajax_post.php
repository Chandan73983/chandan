<!DOCTYPE html>
<html>

<head>
    <title>AJAX Form Post</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        $("#ajaxForm").submit(function(e) {
            e.preventDefault();
            var name = $("#name").val();
            var email = $("#email").val();
            $.post("submit.php", {
                name: name,
                email: email
            }, function(response) {
                $("#result").html(response);
            });
        });
    });
    </script>
</head>

<body>
    <br>
    <form id="ajaxForm" method="post">
        <label>Name:</label>
        <input type="text" id="name" name="name"><br>
        <label>Email:</label>
        <input type="email" id="email" name="email"><br>
        <button type="submit">Submit</button>
    </form>
    <br>
    <div id="result"></div>


</body>

</html>