<?php
$fruits = ["apple", "banana", "cherry"];
echo "Original Array:<br>";
foreach($fruits as $fruit){
    echo "$fruit<br>";
}
$padded = array_pad($fruits, 4, "mango");
echo "After array_pad():<br>";
foreach($padded as $item){
    echo "$item<br>";
}
$sliced = array_slice($fruits, 1, 2); 
echo "After array_slice():<br>";
foreach($sliced as $item){
    echo "$item<br>";
}
$colors = ["red", "green", "blue", "yellow"];
echo "Original Colors Array:<br>";
foreach($colors as $c){
    echo "$c<br>";
}
array_splice($colors, 1, 2, ["purple", "pink"]);
echo "<br>After array_splice():<br>";
foreach($colors as $c){
    echo "$c<br>";
}
$person = ["Anushka", 18, "Delhi"];
list($name, $age, $city) = $person;
echo "Using list():<br>";
echo "Name: $name<br>";
echo "Age: $age<br>";
echo "City: $city<br>";
?>
