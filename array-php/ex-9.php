<?php
$countries = array(
    "usa" => "washington,d.c.",
    "canada" => "ottawa",
    "germany" => "berlin",
    "japan" => "tokyo",
    "australia" => "canberra"
);

ksort($countries);
echo "array sorted by countries(keys) i ascending order:<br>";
foreach($countries as $country => $capital){
    echo "the capital of". $country . "is" . $capital . ".<br>";

}

echo "<br>";

arsort($countries);
echo "array sorted by capitals (values) in descending order:<br>";
foreach($countries as $country => $capital){

    echo "the capital of " . $country . "is" . $capital . ".<br>";
    
}
?>