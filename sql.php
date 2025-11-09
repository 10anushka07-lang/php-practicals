<html>
<head>
<meta charset="UTF-8">
<title>MySQL PHP Example</title>
</head>
<body>

<?php
$hostname = "localhost";
$user = "root";
$pass = "AIK081$78";
$db = "test";

$con = mysqli_connect($hostname, $user, $pass, $db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Correct SQL query
$query3 = "SELECT * FROM studentbca2 WHERE name='aman'";

// Execute query
$result = mysqli_query($con, $query3);

if ($result) {
    echo "<h3>Student Table Data:</h3>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['roll'] . " " . $row['name'] . "<br>";
    }
} else {
    echo "Query failed: " . mysqli_error($con);
}

mysqli_close($con);
?>

</body>
</html>
