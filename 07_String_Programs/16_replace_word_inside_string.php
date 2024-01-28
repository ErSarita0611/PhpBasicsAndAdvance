<?php

// replace a word inside a string
/* Method 1: str_replace() Method: 
The str_replace() method is used to replace all the occurrences of the word W1 by replacing 
word W2 in the given string str. */

// Syntax:
// str_replace( $searchVal, $replaceVal, $subjectVal, $count )

// PHP program to replace all occurrence of a word inside a string
$str = "sarita for anu"; 
$w1 = "sarita";
$w2 = "TheBest";
   
// Using str_replace() function to replace the word
$str = str_replace($w1, $w2, $str);
echo $str;
echo "<br>";


/* Method 2: str_ireplace() Method: 
The str_ireplace() method is used to replace all the occurrences of the word W1 by replacing 
word W2 in the given string str. The difference between str_replace() and str_ireplace() is 
that str_ireplace() is a case-insensitive. */
// Syntax:
// str_ireplace( $searchVal, $replaceVal, $subjectVal, $count )

$str = "Sarita is a Software Developer"; 
$w1 = "sarita";
$w2 = "DEVELOPER";
   
// Using str_ireplace() function replace the word 
$str = str_ireplace($w1, $w2, $str);
echo $str;
echo "<br>";

/* Method 3: preg_replace() Method: 
The preg_replace() method is used to perform a regular expression for search and replace the content.*/

// Syntax:
// preg_replace( $pattern, $replacement, $subject, $limit, $count )

$str = "geeks for Geeks"; 
$w1 = "geeks";
$w2 = "GEEKS";
   
// Using preg_replace() function to replace the word 
$str = preg_replace('/bgeeksb/',$w2, $str);
echo $str; 

?>