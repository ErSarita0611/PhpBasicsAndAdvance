<?php 

// remove all white spaces from a string
/* 1: str_replace() Method:
The str_replace() method is used to replace all the occurrences of the search string (” “) 
by replacing string (“”) in the given string str. */

// Syntax:
// str_replace($searchVal, $replaceVal, $subjectVal, $count)

/* The str_replace() is a built-in function in PHP and is used to replace all the occurrences of 
the search string or array of search strings by replacement string or array of replacement 
strings in the given string or array respectively. */

// PHP program to remove all white spaces from a string
$str = "  My World The Best ";  
    
// Using str_replace() function to removes all whitespaces  
$str = str_replace(' ', '', $str); 
echo $str;  
echo "<br>";

/* 2: preg_replace() Method: 
The preg_replace() method is used to perform a regular expression for search and replace the content.*/ 

// Syntax:
// preg_replace( $pattern, $replacement, $subject, $limit, $count )

$str = "  Geeks for   Geeks  ";  
    
// Using preg_replace() function  to remove all whitespaces 
$str = preg_replace('/\s+/', '', $str); 
echo $str; 

?>