<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<body>
    This is the home page <br>
    <a href="sessionpractice.php"> This goes to the login page <br>
</body>
</html>
<?php
echo $_SESSION["username"]."<br>";
echo $_SESSION["password"]."<Br>";
?>