<?php 
echo "<h3>4 Given day = 3; use switch to print the day name (1=Monday...7=Sunday), with a default case for invalid numbers. </h1>";
$day=3;
switch($day){
    case 1:
        echo "Monday";
        break;
        case 2:
            echo "Tuesday";
            break;
            case 3:
                echo "Wednesday";
                break;
                case 4:
                    echo "thursday";
                    break;
                    case 5:
                        echo "Friday";
                        break;
                        case 6:
                            echo "Saterday";
                            break;
                            case 7:
                                echo "Sunday";
                                break;
                                default:
                                echo "Invalid days";

}
?>