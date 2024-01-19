<?php

// array_merge() Function:
/* The array_merge() function is used to merge two or more arrays into a single array. 
This function is used to merge the elements or values of two or more arrays together 
into a single array. */ 

$arr1 = array(
    "sarita",
    "kumari",
    "Sandhya",
    "Kumari"
);
$arr2 = array(
    "Welcome"
);
$margearr = array_merge($arr1, $arr2);
print_r($margearr);
echo "<br>";



// array_unshift() function: 
// The array_unshift() function is used to add one or more elements at the beginning of the array. 


$array = array(
    "sarita",
    "is a",
    "computer",
    "science",
    "Engineer"
);
$element = "Welcome";
array_unshift( $array, $element);
print_r($array);

echo "<br>";


// Example 2: 

$array = array(
    "sarita",
    "sandhya",
    "priya",
    "Anshu"
);

$element = "Welcome";
array_unshift( $array, $element);
print_r($array);
?>