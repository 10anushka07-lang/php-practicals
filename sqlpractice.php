<?php
        $hostname="localhost";
        $user="root";
        $pass="AIK081$78";
        $db="test";
        
        //Step 2 Create  A CONNECTION
        $con= mysqli_connect($hostname,$user,$pass,$db);
        if($con){
            echo"connected";
        }
    else{
        echo"could not connect";
    }
    $query=
        "create database riddhi3";
    mysqli_query($con, $query);    
    $query1 = "CREATE TABLE IF NOT EXISTS studentbca (
    roll INT,
    name VARCHAR(10)
)";
mysqli_query($con, $query1);
echo "<h3>Student Table Data:</h3>";
$query2 = "INSERT INTO studentbca VALUES (10, 'Aman')";
mysqli_query($con, $query2);
$query3 = "SELECT * FROM studentbca";
$result = mysqli_query($con, $query3);

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['roll'] . " " . $row['name'] . "<br>";
}

mysqli_close($con);
?>