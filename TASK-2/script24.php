<?php
// Function to calculate the square root of a number
function calculateSquareRoot($number) {
    return sqrt($number);
}

// Example usage
$number = 25; // The number for which you want to calculate the square root

$squareRoot = calculateSquareRoot($number);

echo "The square root of " . $number . " is: " . $squareRoot;
?>