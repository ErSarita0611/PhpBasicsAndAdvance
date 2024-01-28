<?php

// remove white spaces only beginning/end of a string 
// 1: ltrim() Method: The ltrim() method is used to strip whitespace only from the beginning of a string.

$str = "  Sarita is a Software Developer  ";

// Using ltrim() function removes whitespaces from beginning of a string  

$str = ltrim($str);
echo $str;
$len = strlen($str);
echo "<br> Lenght of string: ";
echo $len;
echo "<br>";


// Method 2: rtrim() Method: The rtrim() method is used to strip whitespace only from the end of a string.

// PHP program to remove white space from the end of a string
$str = "  Sarita is a PHP Web Developer  ";
// Using rtrim() function to remove whitespaces from end of a string
$str = rtrim($str); 
  
// Printing the result 
echo $str;  
  
$len = strlen($str);  
echo "<br> Length of String : ";   
echo $len;

?>