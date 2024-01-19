<?php

// Merge two arrays keeping original keys

// Using + operator.

$array1 = array(
    1 => "sarita",
    2 => "Sandhya",
    3 => "Dolly"
);

$array2 = array(
    4 => "Is A",
    5 => "Computer",
    6 => "Science",
    7 => "Engineer",
    8 => "And",
    9 => "Web Developer"

);

$merged_array = $array1 + $array2;
var_dump($merged_array);
echo "<br>";



// 2: Using inbuilt function array_replace() function.

$array1 = array(
    1 => "A",
    2 => "B",
    3 => "C"
);

$array2 = array(
    4 => "D",
    5 => "E",
    6 => "F",
    7 => "Q",
    9 => "H"
);

$array_merged = array_replace($array1, $array2);
var_dump($array_merged);


?>