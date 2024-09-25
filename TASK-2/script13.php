<?php
// Function to convert Celsius to Fahrenheit
function celsiusToFahrenheit($celsius) {
    return ($celsius * 9/5) + 32;
}

// Example usage
$celsius = 25; // The temperature in Celsius

$fahrenheit = celsiusToFahrenheit($celsius);

echo $celsius . " degrees Celsius is equal to " . $fahrenheit . " degrees Fahrenheit.";
?>