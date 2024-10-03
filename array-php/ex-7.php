<?php
$countries = array(
    "usa" => "washington,d.c.",
    "canada" => "ottawa",
    "germany" => "berlin",
    "japan" => "tokyo",
    "australia" => "canberra"
);

$countries["france"] = "paris";

$countries["germany"] = "munich";;

foreach ($countries as $county => $capital){
    echo "the capital of " . $county . "is" . $capital . ".<br>";
    
}

?>