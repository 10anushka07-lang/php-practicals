<html>
<head>
    <meta charset="UTF-8">
    <title>MySQL PHP Example</title>
</head>
<body>
<?php
// Step 1: Connection details
$hostname = "localhost";
$user = "root";
$pass = "AIK081$78";
$db = "test";

// Step 2: Create a connection
$con = mysqli_connect($hostname, $user, $pass, $db);

// Step 3: Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Step 4: Create table (if not exists)
$query1 = "CREATE TABLE IF NOT EXISTS studentbca (
    roll INT,
    name VARCHAR(10)
)";
mysqli_query($con, $query1);

// Step 5: Insert data
$query2 = "INSERT INTO studentbca VALUES (10, 'Aman')";
mysqli_query($con, $query2);

// Step 6: Select data
$query3 = "SELECT * FROM studentbca";
$result = mysqli_query($con, $query3);

// Step 7: Display data
echo "<h3>Student Table Data:</h3>";
while ($row = mysqli_fetch_assoc($result)) {
    echo $row['roll'] . " " . $row['name'] . "<br>";
}

// Step 8: Close connection
mysqli_close($con);
?>
</body>
</html>
