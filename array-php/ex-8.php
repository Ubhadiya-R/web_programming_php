<?php
$countries = array(
    "usa" => "washington,d.c.",
    "canada" => "ottawa",
    "germany" => "berlin",
    "japan" => "tokyo",
    "australia" => "canberra"
);

$country = "japan";
echo "the capital of " . $country . "is" . $countries[$country]. ".<br>";

?>