<?php
// create a string by joining the array elements
/* Method 1: implode() Method: 
The implode() method is used to join an array of elements that are separated by a string.
Joining can be done with or without separator. */

// Syntax:
// string implode($separator, $array)

// PHP program to create a string by joining the values of an array 
// Function to get the string  
function get_string ($arr) { 
      
    // Using implode() function to join without separator 
    echo implode($arr);  
        
    // Using implode() function to  join with separator 
    echo implode("-", $arr);  
} 
  
// Given array 
$arr = array('Welcome','for','Welcome',"\n"); 
  
// function calling 
$str = get_string ($arr);
echo "<br>";

/* Method 2: join() Method: 
The join() method is used to join an array of elements that are separated by a string. 
Joining can be done with or without separator. The join() method is same as the implode() method. */

// Syntax:
// string join($separator, $array)

// Function to get the string  
function get_string1 ($arr){ 
      
    // Using join() function to 
    // join without separator  
    echo join($arr);  
        
    // Using join() function to 
    // Join with separator  
    echo join("-", $arr);  
} 
  
// Given array 
$arr = array('sarita','is   ','sarita',"\n"); 
  
// function calling 
$str = get_string1 ($arr); 

?>