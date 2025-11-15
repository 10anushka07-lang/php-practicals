<?php


$age = isset($_GET["age"]) ? $_GET["age"] : "";
$email = isset($_GET["email"]) ? $_GET["email"] : "";


if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Your email is valid: $email <br>";
} else {
    echo "Invalid email <br>";
}


if (!empty($age) && filter_var($age, FILTER_VALIDATE_INT)) {
    echo "Your age is valid: $age <br>";
} else {
    echo "Invalid age <br>";
}
?>
