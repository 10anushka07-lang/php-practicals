<?php
echo "<h3>Main Page (main.php)</h3>";
echo "<b>Using include:</b><br>";
include("second.php");
echo "This line will still execute even if second.php is missing.<br><br>";
echo "<b>Using require:</b><br>";
require("second.php");
echo "This line will not execute if second.php is missing.<br><br>";
echo "<b>Demonstrating exit():</b><br>";
echo "This message is before exit.<br>";
exit("Program terminated using exit().<br>");
echo "This line will never be displayed.<br>";
?>





