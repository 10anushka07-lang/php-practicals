<html>
 <head>
 </head>
 <body>
 <?php
 echo "<br> Before <br>";
 include 'practicalno27.php';
 function execute($conn,$query){
 mysqli_query($conn,$query);
 }
 function delete($conn){
 $query="delete from student council where ID='6'";
 execute_($conn,$query);
 }
 function modify($conn){
 $query="update studentcouncil set name='deepika' where ID='8'";
 execute_($conn,$query);
 }
 function add($conn){
 $query="insert into studentcouncil values (18, 'art club coordinator', 'nishita', 'commercewithmaths')";
 execute_($conn,$query);
 }
 $host="localhost";
 $user="root";
 $pass="AIK081$78";
 $db="classof2024";
 $conn=mysqli_connect($host,$user,$pass,$db);

 delete($conn);
 modify($conn);
 add($conn);
 echo "<br> After <br><br>";
 include 'practicalno27.php';
 ?>
 </body>