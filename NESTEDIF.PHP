<?php
$marks = 85;
if ($marks >= 0) {                 
    if ($marks >= 90) {
        echo "Grade: A+";
    } 
    else if ($marks >= 75) {       
        echo "Grade: A";
    } 
    else if ($marks >= 60) {
        echo "Grade: B";
    } 
    else if ($marks >= 40) {
        echo "Grade: C";
    } 
    else {
        echo "Fail";
    }
} 
else {
    echo "Invalid marks!";
}

?>
