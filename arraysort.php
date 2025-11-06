<?php
$ar = [1, 10, 2, 45, 30];

sort($ar);
echo "Sorted in ascending order:<br>";
foreach ($ar as $b) {
    echo "$b<br>";
}

rsort($ar);
echo "Sorted in descending order:<br>";
foreach ($ar as $b) {
    echo "$b<br>";
}

$students = array(
    "Anushka" => "00711102024",
    "Riddhi Nangia" => "01471482024",
    "Nishita" => "01491482024",
    "Manya Goyal" => "01501482024",
    "Anjali" => "01511482024",
    "Dhruv Gupta" => "01521482024",
    "Daksh saini" => "01531482024",
    "Agrima Rawat" => "01911102024",
    "Deepika" => "00311102024",
    "Sanskriti Bhatia" => "02611102024",
    "Aayush" => "00611102024",
    "Rohan" => "02411102024",
    
);

echo "<br>Ascending order by key:<br>";
ksort($students);
foreach ($students as $name => $rollno) {
    echo "Name: $name — Roll No: $rollno<br>";
}

echo"<br>Ascending order by value:<br>";
asort($students);
foreach ($students as $name => $rollno) {
    echo "Name: $name — Roll No: $rollno<br>";
}
echo"<br> Reverse using values<br>";
arsort($students);
foreach ($students as $name => $rollno) {
    echo "Name: $name — Roll No: $rollno<br>";
}
echo"<br> Reverse according to keys<br>";
krsort($students);
foreach ($students as $name => $rollno) {
    echo "Name: $name — Roll No: $rollno<br>";
}

?>
