
<?php

// How to delete an Element From an Array in PHP ?

// There are multiple ways to delete an element from an array in PHP. 


// Functions used:
// unset(): This function takes an element as a parameter and unset it. It wouldn’t change the keys of 
// other elements.
// array_splice(): This function takes three parameters an array, offset (where to start), 
// and length (number of elements to be removed). It will automatically re-index an indexed array but
//  not an associated array after deleting the elements.
// array_diff(): This function takes an array and list of array values as input and deletes the 
// giving values from an array. Like unset() method, it will not change the keys of other elements.


// Steps used:
// Declare an associated array.
// Delete element from array.
// Print the result.
// Declare an indexed array.
// Delete an element from the indexed array.
// Print the result.

// Example unset() function

// Declaring associated array
$ass_arr = ["a"=>"Geeks", "b"=>"For", "c"=>"Geeks"];
 
// Deleting element associated with key "b"
unset($ass_arr["b"]);

// Printing array after deleting the element
print_r($ass_arr);

// Declaring indexed array
$ind_arr = ["Geeks","For","Geeks"];

// Deleting element and index 1
unset($ind_arr[1]);

// Printing array after deleting the element
print_r($ind_arr);


?>