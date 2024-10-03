<?php

$students = array(
    array("name" => "riya","scores" => array(85,78,90)),
    array("name" => "yeshvi","scores" => array(92,88,84)),
    array("name" => "hetvi","scores" => array(76,85,89))
);

foreach($students as $student){
    echo "scores for" . $student['name']. ":<br>";
    foreach($student['scores'] as $score){
        echo $score . " ";

    }
    echo "<br><br>";
}
?>