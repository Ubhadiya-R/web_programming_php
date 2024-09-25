<?php
// Function to swap two numbers without using a third variable
function swapNumbers(&$a, &$b) {
    $a = $a + $b; // Step 1: Add both numbers and store in $a
    $b = $a - $b; // Step 2: Subtract $b from the new value of $a to get the original $a
    $a = $a - $b; // Step 3: Subtract the new value of $b from $a to get the original $b
}

// Example usage
$a = 5;
$b = 10;

echo "Before swapping: a = $a, b = $b\n";

swapNumbers($a, $b);

echo "After swapping: a = $a, b = $b";
?>