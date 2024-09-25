<?php
// Function to find the largest number among three
function findLargest($num1, $num2, $num3) {
    if ($num1 >= $num2 && $num1 >= $num3) {
        return $num1;
    } elseif ($num2 >= $num1 && $num2 >= $num3) {
        return $num2;
    } else {
        return $num3;
    }
}

// Example usage
$num1 = 10;
$num2 = 25;
$num3 = 15;

$largest = findLargest($num1, $num2, $num3);

echo "The largest number among $num1, $num2, and $num3 is: " . $largest;
?>