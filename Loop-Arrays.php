<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post">
    <?php 
    for($i=0;$i<5;$i++){
    ?>

Student : <?php echo $i; ?> Marks : <input type="text" name="marks[]" placeholder="Enter the Marks"><br><br>
<?php } ?>
<br><br>
<button type="submit" name="submit">Submit</button>
    </form>
    <?php 
    if(isset($_POST['marks'])){
    $total=0;
    for($j=0;$j<5;$j++){
        $marks=$_POST["marks"][$j];
        $total+=$marks;

    }
    echo "Total Marks :".$total;
    }
    ?>
</body>
</html>