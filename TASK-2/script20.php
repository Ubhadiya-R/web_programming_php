<?php
// Function to calculate the factorial of a number
function calculateFactorial($number) {
    if ($number <= 1) {
        return 1;
    } else {
        return $number * calculateFactorial($number - 1);
    }
}

// Example usage
$number = 5; // The number for which you want to calculate the factorial

$factorial = calculateFactorial($number);

echo "The factorial of " . $number . " is: " . $factorial;
?>