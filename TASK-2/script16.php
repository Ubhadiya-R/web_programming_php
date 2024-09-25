<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
    Enter a sentence: <input type="text" name="sentence"><br><br>
    <input type="submit" name="submit" value="Count Vowels">
</form>

<?php
if (isset($_POST['submit'])) {
    $sentence = $_POST['sentence'];
    $vowel_count = 0;

    // Convert the sentence to lowercase for easier comparison
    $sentence = strtolower($sentence);

    // Define the vowels
    $vowels = array('a', 'e', 'i', 'o', 'u');

    // Loop through each character in the sentence and check if it's a vowel
    for ($i = 0; $i < strlen($sentence); $i++) {
        if (in_array($sentence[$i], $vowels)) {
            $vowel_count++;
        }
    }

    echo "The number of vowels in the sentence is: " . $vowel_count;
}
?>

</body>
</html>