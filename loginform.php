<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>
<h3>Login Form</h3>
<form method="post" action="">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit" value="Login">
</form>
<hr>
<?php
$valid_user = "admin";
$valid_pass = "12345";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];    
    if (empty($username) || empty($password)) {
        echo " Please enter both username and password.";
    } 
    elseif ($username == $valid_user && $password == $valid_pass) {
        echo " Login successful! Welcome, {$username}.";
    } 
    else {
        echo " Invalid username or password.";
    }
}
?>
</body>
</html>
