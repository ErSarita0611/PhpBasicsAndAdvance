
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


// array_splice(): This function takes three parameters an array, offset (where to start), 
// and length (number of elements to be removed). It will automatically re-index an indexed array but
//  not an associated array after deleting the elements.

echo "<br>";
// Declaring associated array
$split = ["a"=>"sarita", "b"=>"is a", "c"=>"Software Developer"];
// Deleting element associated with key "b"
array_splice($split,1,1);
// Printing array after deleting the element 
print_r($split);
// Declaring indexed array
$split_arr = ["Web", "Developer", "in php"];
// Deleting element and index 1
array_splice($split_arr,1,1);
// Printing array after deleting the element
print_r($ind_arr);


// array_diff(): This function takes an array and list of array values as input and deletes the 
// giving values from an array. Like unset() method, it will not change the keys of other elements.
echo "<br>";
$arr_diff = ["a"=>"sarita", "b"=>"is a", "c"=>"Developer"];
$arr_diff = array_diff($arr_diff, ["hello"]);
print_r($arr_diff);
$ind_arr = ["sarita","is a", "intelligent"];
$ind_arr = array_diff($ind_arr,["for"]);
print_r($ind_arr);



?>