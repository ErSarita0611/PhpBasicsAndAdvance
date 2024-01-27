<?php

// Change strings in an array to uppercase

// use array_flip() function swap keys with the values present in the array. That is, the keys will
// now become values and their respective values will be their new keys.
// use array_change_key_case() function to change case of current keys(original values).
// use array_flip() function again to flip key and values of array to obtain original array 
// where strings value are in upper case.

$input =   array("Hello", "World", "and", "World is", "the Best");
print_r($input);
// Step 1: flip array key => value
$input = array_flip($input);

// Step 2: change case of new keys to upper
$input = array_change_key_case($input, CASE_UPPER);
// Step 3: reverse the flip process to regain strings as value
$input = array_flip($input);
// print array after conversion of string
print"\<br>Array after string conversion: <br>";
print_r($input);

?>