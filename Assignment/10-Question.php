<?php
echo "<h3>10 Given signal = red use switch to print the action (red=Stop, yellow=Get Ready, green=Go, default=Invalid Signal)</h1>";
$color="red";
switch($color){
    case "red":
    echo "Stop";
    break;
    case "yellow":
    echo "Get Ready";
    break;
    case "green":
    echo "go";
    break;
    default:
    echo "Invalid Color";
}


?>