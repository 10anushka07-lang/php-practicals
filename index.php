<?php
session_start();
$_SESSION["username"]="bro code";
$_SESSION["password"]="pizza123";
echo $_SESSION["username"]."<br>";
echo $_SESSION["password"]."<Br>";










?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    This is the login page <br>
    <a href="home.php"> This goes to the home page <br>
</body>
</html>