<?php

setcookie("favourite_food", "pizza", time() + (4800 * 2), "/");
setcookie("favoritedrink", "coffee", time()+  (4800*2), "/");
setcookie("favouritedesert","icecream",time()+  (4800*2), "/");
# cookies are stored in the form of associative array 
# to access them we use foreach loop
foreach($_COOKIE as $key =>$value){
    echo"{$key}={$value}<Br>";
}
if(isset($_COOKIE["favourite_food"])){
    echo"ANUSHKA'S FAVOURITE FOOD IS  {$_COOKIE["favourite_food"]}";
}

else{
    echo"I DON'T KNOW ANUSHKA'S FAVOURITE FOOD";
}


?>
<html>
<body>

</body>
</html>
