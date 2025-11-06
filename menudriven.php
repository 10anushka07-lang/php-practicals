<?php

# Menu driven program using switch-case

echo "Menu Driven Program in PHP<br>";
echo "1. Addition<br>";
echo "2. Subtraction<br>";
echo "3. Multiplication<br>";
echo "4. Division<br>";



$choice = input("Enter your choice (1-4): ");

switch ($choice) {
    case 1:
        $sum = $num1 + $num2;
        echo "Result: Addition = $sum\n";
        break;

    case 2:
        $diff = $num1 - $num2;
        echo "Result: Subtraction = $diff\n";
        break;

    case 3:
        $mul = $num1 * $num2;
        echo "Result: Multiplication = $mul\n";
        break;

    case 4:
        if ($num2 != 0) {
            $div = $num1 / $num2;
            echo "Result: Division = $div\n";
        } else {
            echo "Error: Division by zero not allowed!\n";
        }
        break;

    default:
        echo "Invalid choice! Please enter 1 to 4.\n";
}

?>
