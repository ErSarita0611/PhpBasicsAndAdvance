<?php

// prepend a string 

/* Method 1: Concatenation Operator(“.”):
The Concatenation operator is used to prepend a string str1 with another string str2 by 
concatenation of str1 and str2.*/ 

function preped_string($str1, $str2){
    // using concatination operator (.)
    $res = $str1 . $str2;
    return $res;

}
$str1 = "HelloWorld";
$str2 = "Best";
$str = preped_string ($str1, $str2);
echo $str;
echo "<br>";


/* Method 2: Concatenation assignment operator (“.=”):
The Concatenation assignment operator is used to prepend a string str1 with another string 
str2 by appending the str2 to the str1. */

function prepend_string1($str1, $str2){
    // Using Concatenation assignment operator (.=)
    $str1 .= $str2;
    return $str1;
   
}
$str1 = "sarita";
$str2 = "IsTheBest";
$str = prepend_string1($str1, $str2);
echo $str;
?>