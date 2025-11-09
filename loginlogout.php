<?php
session_start();
if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if (!empty($username) && !empty($password)) {   
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
        echo "<p>Login successful!</p>";
        echo "<p>Username: " . $_SESSION["username"] . "</p>";
        echo "<p>Password: " . $_SESSION["password"] . "</p>";
        echo '<a href="logout.php">Logout</a>';} 
        else {
        echo "<p style='color:red;'>Please enter both username and password.</p>";
    }}?>
<html><head><title>Session Login</title></head>
<body><form action="loginlogout.php" method="post">
Username:<br><input type="text" name="username"><br>
<br>Password:<br><input type="password" name="password"><br><br>
<input type="submit" name="login" value="Login">
</form></body></html>
