<?php

// Sort a multidimensional array by date element

// Sorting a multidimensional array by element containing date. Use the usort() function to 
// sort the array.

$array = array(
    array("Engineer" => "Sarita",
          "datetime" => "2024-02-22 01:17:30"),
    array("CivilEngineer" => "Sandhya",
          "datetime" => "2024-05-16 02:10:50"),
    array("DataScience" => "Dolly",
          "datetime" => "2023-12-15")
          
);
// Comparison function 

function date_compare($element1, $element2){
    $datetime1 = strtotime($element1['datetime']);
    $datetime2 = strtotime($element2['datetime']);
    return $datetime1 - $datetime2;
}
// sort the array
usort($array, 'date_compare');

// print the array 
print_r($array);

?>