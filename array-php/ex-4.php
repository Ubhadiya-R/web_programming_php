<?php
$fruits = array("apple","banana","mango","orange","strawberry");

sort($fruits);
echo "fruits in ascending order : <br> ";
print_r($fruits);
rsort($fruits);
echo "fruits in descending order : <br>";
print_r($fruits);

?>