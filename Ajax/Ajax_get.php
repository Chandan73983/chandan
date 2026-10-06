<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./node_modules/jquery/dist/jquery.min.js"></script>
</head>

<body>
    <h1>Get Method</h1>
    <button id="loadBtn2">Load User</button>
    <div id="result2" style="margin-top:15px; color: black;"></div>

    <script>
        $("#loadBtn2").click(function() {
            $.get("https://jsonplaceholder.typicode.com/users/1",
                function(data, state) {
                    $("#result2").html("<b>Name:</b>" + data.name + "<br>" + " <b>State:</b>" + state);
                });
        });
    </script>
</body>

</html>