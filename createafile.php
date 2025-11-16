<?php
$filename = "sanskriti.txt";
$file = fopen($filename, "x"); 
echo " File '$filename' created successfully!";
fclose($file);

?>
