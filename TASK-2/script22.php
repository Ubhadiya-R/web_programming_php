<?php
// Function to calculate the area of a circle
function calculateAreaOfCircle($radius) {
    return pi() * pow($radius, 2);
}

// Example usage
$radius = 7; // The radius of the circle

$area = calculateAreaOfCircle($radius);

echo "The area of the circle with radius " . $radius . " is: " . $area . " square units.";
?>