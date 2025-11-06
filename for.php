<?php
echo "usage of for loop<br>";
for ($a = 1; $a <= 10; $a++) {
    echo "$a<br>";
}

echo "usage of while loop<br>";
$a = 10;
while ($a > 5) {
    echo "$a<br>";
    $a--;
}

echo "usage of do while loop<br>";
$i = 10;
do {
    echo "$i<br>";
    $i = $i - 2;
} while ($i >= 2);
?>
