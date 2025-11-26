<?php 
$hostname="localhost";
$username="root";
$password="AIK081$78";
$dbname="test";
 $con= mysqli_connect($hostname,$username,$password,$dbname);
        if($con){
            echo"connected";
        }
    else{
        echo"could not connect";
    }
$query="create table sqlpractice(
roll int ,
name varchar(50)
)";
mysqli_query($con,$query);
echo " table is created";
?>

