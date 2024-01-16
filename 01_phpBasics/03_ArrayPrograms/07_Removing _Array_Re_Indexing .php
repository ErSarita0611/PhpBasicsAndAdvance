<?php

// Removing Array Element and Re-Indexing 

// 1. unset(): This function unsets a given variable.
// Syntax:
// void unset ( mixed $var [, mixed $... ] )

// 2. array_values(): This function returns all the values from the array and indexes the array numerically.
// Syntax:
// array array_values ( array $array )


$arr1 = array(
    "sarita",
    "kumari",
    "ruchi"
);
unset($arr1[1]);
var_dump($arr1);
echo "<br>";
$arr1 = array_values($arr1);
var_dump($arr1);
echo "<br>";

$arr1 = array(
    "sarita", 
    "kuari",
    "Ruchi"
);

// remove item at index 1 which is 'for'
array_splice($arr1, 1,1);

var_dump($arr1);


?>