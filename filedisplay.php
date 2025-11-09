<?php
$filename = "myfile.txt";
$file = fopen($filename, "r");
 while (!feof($file)) {
        echo fgets($file) ; 
    }
    fclose($file);
?>

