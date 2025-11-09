<?php
function factorial($num){
     if ($num <= 1) {   // Base case
        return 1;
    }
    else{
    return $num*factorial($num-1);
}
}
$num = 5; 


$result = factorial($num);


echo "Factorial of $num is: $result";
?>