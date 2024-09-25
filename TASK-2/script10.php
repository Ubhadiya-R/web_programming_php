<?php
// Function to calculate the area of a rectangle
function calculateRectangleArea($length, $width) {
    return $length * $width;
}

// Example usage
$length = 10; // Length of the rectangle
$width = 5;   // Width of the rectangle

$area = calculateRectangleArea($length, $width);

echo "The area of the rectangle with length " . $length . " and width " . $width . " is: " . $area . " square units.";
?>