<!DOCTYPE html>
<html>

<head>
    <title>AJAX with JSON</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        $("#jsonForm").submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "json-server.php",
                data: {
                    username: $("#username").val()
                },
                dataType: "json",
                success: function(response) {
                    $("#output").html("<strong>Welcome, </strong>" + response.name +
                        "<br><strong>Email:</strong> " + response.email);
                },
                error: function() {
                    $("#output").html("❌ Error occurred while fetching JSON response.");
                }
            });
        });
    });
    </script>
</head>

<body>
    <br>
    <form id="jsonForm">
        <label>Enter Username:</label>
        <input type="text" id="username" name="username">
        <button type="submit">Get JSON Info</button>
    </form>
    <br>
    <div id="output"></div>


</body>

</html>