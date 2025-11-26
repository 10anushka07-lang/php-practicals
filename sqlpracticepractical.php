<?php
$hostname="localhost";
$username="root";
$password="AIK081$78";
$dbname="test";
$conn= mysqli_connect($hostname,$username,$password,$dbname);
if($conn){
    echo"connected";
}
else{
    echo "not connected";
}
$query1="create table studentcouncil(
rollno int ,
name varchar(50))";
mysqli_query($conn,$query1);
echo " table is created<br>";
$query="insert into studentcouncil values(08,'dhruv')";
mysqli_query($conn,$query);
$query3 = "SELECT * FROM studentcouncil";
$result = mysqli_query($conn, $query3);

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['rollno'] . " " . $row['name'] . "<br>";
}

mysqli_close($conn);
?>
