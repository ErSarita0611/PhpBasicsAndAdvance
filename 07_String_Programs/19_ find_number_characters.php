<?php

// find number of characters

/* 1: strlen() Method: 
The strlen() method is used to get the length of a given string str. Length of the string
including all the white spaces and special characters in this method. */

$str = "Sarita Is the Best";
$len = strlen($str);
echo $len;
echo "<br>";


/* 2: mb_strlen() Method: 
The mb_strlen() method is used to return the number of characters in a string having character 
encoding. A multi-byte character is counted as 1. */

$str = "Hello World";
// Using mb_strlen() function to get the length of string 
$len = mb_strlen($str);
echo $len;
echo "<br>";

/* 3: iconv_strlen() Method:
The iconv_strlen() method is used to get the character count of a string, as an integer. */

// Syntax:
/* int iconv_strlen( string $str, 
    string $charset = ini_get("iconv.internal_encoding")) */
    $str = " Hello World ";
    // Using iconv_strlen() function to get the length of string 
    $len = iconv_strlen($str);
    echo $len;
    echo "<br>";



    /* 4: grapheme_strlen() Method: 
    The grapheme_strlen() method is used to get the string length in grapheme units 
    (not bytes or characters). */

    // Syntax:
// int grapheme_strlen(string $input)

$str = "  Geeks for Geeks  ";  
// Using grapheme_strlen() function to get the length of string 
$len = grapheme_strlen($str); 
echo $len;


?>