<?php

$cities = array(
    "new york" => array(
        "population" => "8,398,748",
        "area" =>"468.9 sq mi",
        "country" => "usa"
    ),
    "tokyo" => array(
        "population" => "37,393,128",
        "area" => "847.1 sq mi",
        "country" => "japan"
    ),

    "berlin" => array(
        "population" => "3,769,495",
        "area" => "344.3 sq mi",
        "country" => "germany"
    ),

    "sydney" => array(
        "population" => "5,312,163",
        "area" => "4,775.2 sq mi",
        "country" => "australia"
    )
);
    foreach ($cities as $city => $info){
        echo "city:" . $city . "<br>";
        echo "population: " . $info['population'] . "<br>";
        echo "area:" . $info['area'] . "<br>";
        echo "country: " . $info['country'] . "<br>";
    }

?>