<?php
//  append a string
// PHP program to append a string  
// function to append a string  
function append_string ($str1, $str2) { 
      
    // Using Concatenation assignment 
    // operator (.=) 
    $str1 .=$str2; 
      
    // Returning the result  
    return $str1; 
} 
  
// Given string 
$str1 = "Sariat";  
$str2 = "Is";  
$str3 = "Sandy";  
  
// function calling 
$str = append_string ($str1, $str2); 
$str = append_string ($str, $str3); 
  
// Printing the result 
echo $str; 
echo "<br>";

// Operator(“.”): The Concatenation operator is used to append a string str1 with another 
// string str2 by concatenation of str1 and str2.
// Function to append a string  
function append_string1 ($str1, $str2){ 
      
    // Using Concatenation assignment 
    // operator (.) 
    $str = $str1 . $str2; 
      
    // Returning the result  
    return $str; 
} 
  
// Given string 
$str1 = "Geeks";  
$str2 = "for";  
$str3 = "Geeks";  
  
// Function calling 
$str = append_string1 ($str1, $str2); 
$str = append_string1 ($str, $str3); 
  
// Printing the result 
echo $str; 
?>