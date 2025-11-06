<?php

# typecasting in php 
$a=FALSE;
$b=10.3;
$c="ram";
$d=NULL;
$e="";
$f=20;
echo 'a=',"$a<br>";
echo'b=',"$b<br>";
echo'c=',"$c<br>";
echo'd=',"$d<br>";
echo'e=',"$e";
echo'f=',"$f<br>";
echo"cast into integer<br>";
$p=(integer)$a;
$q=(integer)$b;
$r=(integer)$c;
$s=(integer)$d;
$t=(integer)$e;
echo"p=$p<br>";
echo"q=$q<br>";
echo"r=$r<br>";
echo"s=$s<br>";
echo"t=$t<br>";
echo"cast into float<br>";
$p=(float)$a;
$q=(float)$b;
$r=(float)$c;
$s=(float)$d;
$t=(float)$e;
$u=(float)$f;
echo"p=$p<br>";
echo"q=$q<br>";
echo"r=$r<br>";
echo"s=$s<br>";
echo"t=$t<br>";
echo"u=$u<br>";
echo"cast into bool<br>";
$p=(bool)$a;
$q=(bool)$b;
$r=(bool)$c;
$s=(bool)$d;
$t=(bool)$e;
$u=(bool)$f;
echo"p=$p<br>";
echo"q=$q<br>";
echo"r=$r<br>";
echo"s=$s<br>";
echo"t=$t<br>";
echo"u=$u<br>";
echo"cast into string<br>";
$p=(string)$a;
$q=(string)$b;
$r=(string)$c;
$s=(string)$d;
$t=(string)$e;
$u=(string)$f;
echo"p=$p<br>";
echo"q=$q<br>";
echo"r=$r<br>";
echo"s=$s<br>";
echo"t=$t<br>";
echo"u=$u<br>";



?>