<html>
 <head>
 </head>
 <body>
 <?php
 if (isset($_FILES['file'])){
 $tmp_name=$_FILES['file']['tmp_name'];
 $filename=$_FILES['file']['name'];
 $path="UPLOADS/".$filename;
if(move_uploaded_file($tmp_name, $path)){
echo "File uploaded successfully<br>";
$files= scandir('UPLOADS');
foreach ($files as $file){
echo "$file ";
}
}
}else{
?>
<form method="post" action="" enctype="multipart/form-data"> File <input
type="file" name="file" required><br><br> <input type="submit" value='upload'>
</form>
<?php
}
?>
</body>
</html>