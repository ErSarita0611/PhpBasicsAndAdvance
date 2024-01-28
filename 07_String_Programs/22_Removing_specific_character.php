<?php

// Removing occurrences of a specific character from end of a string
/* rtrim() function: 
This function is an inbuilt function in PHP which removes whitespaces or other characters 
(if specified) from the right side of the string. */

$string = "GeeksforGeeks is a best platform....."; 
  
// Use rtrim() function to trim string from right
echo rtrim($string, "."); 
echo "<br>";


/* preg_replace() function: 
This function is an inbuilt function in PHP which is used to perform a regular expression 
for search and replace the content. */

$string = "GeeksforGeeks is a best platform....."; 
$regex = "/\.+$/"; 
  
// Use preg_replace() function to replace the character   
echo preg_replace($regex, "", $string); 

?>