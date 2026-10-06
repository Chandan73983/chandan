<?php 
echo "<h3>16 Given month = 7; use switch (grouped cases) to print the season (12,1,2=Winter, 3,4,5=Summer, 6,7,8=Monsoon, 9,10,11=Autumn, default=Invalid Mon</h1>";
$month=7;
switch($month){
    case 12:
    case 1:
    case 2:
    echo "Winter";
    break;
    case 3:
    case 4:
    case 5:
    echo "Summer";
    break;
    case 6:
    case 7:
    case 8:
    echo "Mansoon";
    break;

    case 9:
    case 10:
    case 11:
    echo "Autumn";
    break;

    default:
    echo "Invalid Months";
}
?>