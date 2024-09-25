<?php
// Function to check if a number is even or odd
function checkEvenOrOdd($number) {
    if ($number % 2 == 0) {
        return "even";
    } else {
        return "odd";
    }
}

// Example usage
$number = 7; // The number to check

$result = checkEvenOrOdd($number);

echo "The number " . $number . " is " . $result . ".";
?>