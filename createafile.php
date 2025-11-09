<?php
$filename = "anushka.txt";
$file = fopen($filename, "x"); 
echo " File '$filename' created successfully!";
fclose($file);

?>
