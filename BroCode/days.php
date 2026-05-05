<?php
$day = date("l"); //returns the full day name

switch($day) {
    case "Monday":
        echo "Start of the work week";
        break;
    case "Tuesday":
        echo "Second day";
        break;
    case "Wednesday":
        echo "Midweek";
        break;
    case "Thursday":
        echo "Almost Friday";
        break;
    case "Friday":
        echo "TGIF!";
        break;
    case "Saturday":
        echo "Weekend!";
        break;
    case "Sunday":
        echo "Rest day";
        break;
    default:
        echo $day . " is not valid";
}
?>