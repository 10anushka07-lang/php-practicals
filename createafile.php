<?php
$filename = "aayush.txt";
$file = fopen($filename, "x"); 
echo " File '$filename' created successfully!";
fclose($file);

?>
