<!DOCTYPE html>
<html>
<body>
<h3>Personal Information Form</h3>

<form method="get">
Name: <input type="text" name="username"><br>
Age: <input type="text" name="age"><br>
<input type="submit" value="Submit (GET)">
</form>

<br>

<form method="post">
Name: <input type="text" name="username"><br>
Age: <input type="text" name="age"><br>
<input type="submit" value="Submit (POST)">
</form>

<hr>

<?php
if (!empty($_GET)) {
    echo "<h4>Using GET Method</h4>";
    echo "Name: {$_GET['username']}<br>";
    echo "Age: {$_GET['age']}<br>";
}

if (!empty($_POST)) {
    echo "<h4>Using POST Method</h4>";
    echo "Name: {$_POST['username']}<br>";
    echo "Age: {$_POST['age']}<br>";
}


if (!empty($_REQUEST)) {
    echo "<h4>Using request Method</h4>";
    echo "Name: {$_REQUEST['username']}<br>";
    echo "Age: {$_REQUEST['age']}<br>";
}

?>
</body>
</html>
