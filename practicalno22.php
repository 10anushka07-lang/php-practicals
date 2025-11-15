<html>
<head>
</head>
<body>
<?php
 if (isset($_FILES['image'])){
 $tmp_name=$_FILES['image']['tmp_name'];
 $filename=$_FILES['image']['name'];
 $path="uploads/".$filename;
 if(move_uploaded_file($tmp_name, $path)){
 echo "<img src='uploads/$filename' width='300'
height='300'>";
 }
 }else{
 ?>
 <form method="post" action="" enctype="multipart/form-data">
 Image <input type="file" name="image" required><br><br>
 <input type="submit" value='upload'>
 </form>
 <?php
 }
 ?>
</body>
</html>