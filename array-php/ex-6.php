<?php
$countries = array(
    "usa" => "washington,d.c.",
    "canada" => "ottawa",
    "germany" => "berlin",
    "japan" => "tokyo",
    "australia" => "canberra"
);

foreach($countries as $country => $capital){
    echo "the capital of " . $country . "is" . $capital . ".<br>";;

}

?>