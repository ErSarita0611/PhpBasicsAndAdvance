<?php

// How to parse a JSON File 
// JSON stands for JavaScript object notation. JSON data is written as name/value pairs.

// Syntax:

// {
// “Data”:[{
// “key”:”value”,
// “key”:value,
// “key n “:”value”
// },
// . . .
// . . .
// {
// “key”:”value”,
// “key”:value,
// “key n “:”value”
// }]


// Advantages:

// JSON does not use an end tag.
// JSON is a shorter format.
// JSON is quicker to read and write.
// JSON can use arrays.

// file_get_contents() function to read JSON file into PHP. This function is used to read the 
// file into PHP code.

// json_decode() function to decode to JSON file into array to display it.

// Read the JSON file  
$json = file_get_contents('my_data.json'); 
  
// Decode the JSON file 
$json_data = json_decode($json,true); 
  
// Display data 
print_r($json_data); 

?>