<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
     // Step 1
        $hostname="localhost";
        $user="root";
        $pass="AIK081$78";
        $db="test";
        
        //Step 2 Create  A CONNECTION
        $con= mysqli_connect($hostname,$user,$pass,$db);
        
        //Step 3 : Write a query to execute
       $query="create table studentbca(roll int , name varchar(10))";
      
        //Step 4:execute a query
        $tb=  mysqli_query($con,$query);
        //Step 5: show data
         while($row=mysqli_fetch_assoc($tb))
         {
             echo $row['roll']." ".$row['name']."<br>";
         }
        ?>
    </body>
</html>