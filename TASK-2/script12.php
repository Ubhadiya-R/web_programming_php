<?php
// Function to concatenate two strings
function concatenateStrings($string1, $string2) {
    return $string1 . $string2; // The dot (.) operator is used to concatenate strings in PHP
}

// Example usage
$string1 = "Hello, ";
$string2 = "World!";

$combinedString = concatenateStrings($string1, $string2);

echo "The concatenated string is: " . $combinedString;
?>