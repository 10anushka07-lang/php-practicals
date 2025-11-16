<?php
$hostname = "localhost";
$username = "root";
$password = "AIK081$78";
$dbname   = "test";

$conn = new mysqli($hostname, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function runQuery($conn, $sql) {
    if ($conn->query($sql) === TRUE) {
        // Convert newlines \n in $sql to <br> in HTML and escape special HTML chars
        echo "Query succeeded:<br>" . nl2br(htmlspecialchars($sql)) . "<br><br>";
    } else {
        echo "Error running query: " . nl2br(htmlspecialchars($conn->error)) . "<br>";
    }
}

// SQL statements, each ending with \n so nl2br will break them
$sqlAdd = "ALTER TABLE users2 ADD COLUMN phone VARCHAR(50)\n";
runQuery($conn, $sqlAdd);

$sqlModify = "ALTER TABLE users2 MODIFY COLUMN phone VARCHAR(100) NOT NULL\n";
runQuery($conn, $sqlModify);

$sqlChange = "ALTER TABLE users2 CHANGE COLUMN phone contact_number VARCHAR(100) NOT NULL\n";
runQuery($conn, $sqlChange);

$sqlDrop = "ALTER TABLE users2 DROP COLUMN contact_number\n";
runQuery($conn, $sqlDrop);

$sqlDropTable = "DROP TABLE IF EXISTS users2\n";
runQuery($conn, $sqlDropTable);

$conn->close();
