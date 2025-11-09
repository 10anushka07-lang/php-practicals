<?php
$filename = "myfile.txt";
$file = fopen($filename, "w");
$add="i have modified/updated the content of myfile.txt";
echo"the content is modified";
fwrite($file, $add);
    fclose($file);
    ?>