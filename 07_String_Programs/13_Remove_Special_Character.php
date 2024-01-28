<?php

/* str_replace() Method:
The str_replace() method is used to remove all the special characters from the given string 
str by replacing these characters with the white space (” “).*/ 

// Syntax:
// str_replace( $searchVal, $replaceVal, $subjectVal, $count )

// PHP program to Remove Special Character From String

function RemoveSpecialChar($str){
// Using str_replace() function to replace the word 
$res = str_replace( array( '\'', '"',
      ',' , ';', '<', '>' ), ' ', $str);
return $res;
}
$str = "Example, to Remove<the>Special 'Char;";
// function  calling 
$str1 = RemoveSpecialChar($str);
echo $str1;
echo "<br>";

/* str_ireplace() Method:
The str_ireplace() method is used to remove all the special characters from the given string
str by replacing these characters with the white space (” “). The difference between str_replace
and str_ireplace is that str_ireplace is case-insensitive. */
// Syntax:

// str_ireplace( $searchVal, $replaceVal, $subjectVal, $count )

function RemoveSpecialChar1($str){
    // Using str_ireplace() function to replace the word 
    $res = str_ireplace( array( '\'', '"',
      ',' , ';', '<', '>' ), ' ', $str);
      return $res;
}
$str = "Example,to remove<the>Special'Char;";
$str1 = RemoveSpecialChar1($str); 
echo $str1;
echo "<br>";


/* preg_replace() Method:
The preg_replace() method is used to perform a regular expression for search and replace the content. */
// Syntax:

// preg_replace( $pattern, $replacement, $subject, $limit, $count )

  // Function to remove the special 
  function RemoveSpecialChar2($str){
 
    // Using preg_replace() function to replace the word 
    $res = preg_replace('/[^a-zA-Z0-9_ -]/s',' ',$str);

    // Returning the result 
    return $res;
}

// Given string
$str = "Example,to remove<the>Special'Char;"; 

// Function calling
$str1 = RemoveSpecialChar2($str); 

// Printing the result
echo $str1;


?>