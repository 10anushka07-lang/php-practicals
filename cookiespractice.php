<?php
setcookie("username","anushka",time()+(86400*2),"/");
setcookie("password","10234",time()+(86400*2),"/");
// to acess 
foreach($_COOKIE as $key=>$value){
     echo"{$key}={$value}<Br>";
}
if (isset($_COOKIE["username"])){
    echo"the username is {$_COOKIE["username"]}";
}
else{
    
}