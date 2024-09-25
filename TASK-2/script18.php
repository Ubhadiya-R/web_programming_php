<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
    Guess a number between 1 and 10: <input type="number" name="guess" min="1" max="10"><br><br>
    <input type="submit" name="submit" value="Submit Guess">
</form>

<?php
session_start();

// Generate a random number if it's not already set
if (!isset($_SESSION['random_number'])) {
    $_SESSION['random_number'] = rand(1, 10);
}

if (isset($_POST['submit'])) {
    $guess = $_POST['guess'];
    $random_number = $_SESSION['random_number'];

    if ($guess == $random_number) {
        echo "Congratulations! You guessed the correct number: " . $random_number . "<br>";
        // Reset the random number for a new game
        unset($_SESSION['random_number']);
    } else {
        echo "Sorry, that's not correct. Try again!";
    }
}
?>
</body>
</html>