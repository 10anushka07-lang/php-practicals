<html>
 <body>
 <?php
 function create_file(){
 $fw=fopen("first.txt",'w');
 $message="hello boss";
 fwrite($fw,$message);
 echo "File created successfully.";
 }
 function create_directory(){
 echo "Folder created successfully.";
 mkdir("uploads");
 }
 function rmfile(){
 if (file_exists('first.txt')){
 echo "File deleted successfully.";
 unlink('first.txt');
 }
 }
 function back_(){
 chdir("..");
 }

 function removedir(){
 echo "Folder deleted successfully.";
 rmdir('uploads');
 }
 function changedir(){
 echo "Change directory successfully.";
 chdir("uploads/");
 }
 function type_file(){
 echo "Type of file is, ". filetype('first.txt');
 }

 create_directory();
 echo "<br>";
 changedir();
 echo "<br>";
 create_file();
 echo "<br>";
 type_file();
 echo "<br>";
 rmfile();
 echo "<br>";
 back_();
 removedir();
 ?>
 </body>
</html>