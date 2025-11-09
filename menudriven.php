
<?php
echo "MENU<br>";
echo "1.  Add <br>";
echo"2. Subtract<br>";
echo"3. Multiply <br>";
echo "4. Divide<br>";
 $choice = 4; 
$a = 10;
$b = 5;
echo'choice', '  ',"$choice<br>";
 switch($choice){
    case 1:
        echo "Sum = " , ($a + $b);
        break;
    case 2:
        echo "Difference = " ,($a - $b);
        break;
    case 3:
        echo "Product = " , ($a * $b);
        break;
    case 4:
        echo "Quotient = " ,($a / $b);
        break;
    default:
        echo "Invalid Choice!";}?>




