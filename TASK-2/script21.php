<?php
// Function to check if a number is a palindrome
function isPalindrome($number) {
    // Convert the number to a string
    $originalNumber = strval($number);

    // Reverse the string
    $reversedNumber = strrev($originalNumber);

    // Check if the original and reversed strings are the same
    if ($originalNumber == $reversedNumber) {
        return true;
    } else {
        return false;
    }
}

// Example usage
$number = 121; // The number to check

if (isPalindrome($number)) {
    echo $number . " is a palindrome.";
} else {
    echo $number . " is not a palindrome.";
}
?>