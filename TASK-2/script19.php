<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
    Enter a positive integer: <input type="number" name="number" min="1"><br><br>
    <input type="submit" name="submit" value="Check Prime">
</form>

<?php
if (isset($_POST['submit'])) {
    $number = $_POST['number'];

    // Function to check if a number is prime
    function isPrime($num) {
        if ($num < 2) {
            return false;
        }
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }
        return true;
    }

    if (isPrime($number)) {
        echo $number . " is a prime number.";
    } else {
        echo $number . " is not a prime number.";
    }
}
?>
</body>
</html>