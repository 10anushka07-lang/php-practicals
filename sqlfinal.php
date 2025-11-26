<?php
$hostname="localhost";
$user="root";
$pass="AIK081$78";
$conn=mysqli_connect($hostname,$user,$pass);
if($conn){
    echo"connected";
}
$query="create database attendenace";
mysqli_query($conn,$query);
echo " database is created<br>";
mysqli_select_db($conn, "attendenace");
$query1="create table firstyear(
rollno int ,
name varchar(50))";
mysqli_query($conn,$query1);
$query2="insert into firstyear values(03,'anushka')";
mysqli_query($conn,$query2);
$query3="select from firstyear";
mysqli_query($conn,$query3);

?>
