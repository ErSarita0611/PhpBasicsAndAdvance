<?php
// generate a random, unique, alphanumeric string

/* 1. str_shuffle() Function: 
The str_shuffle() function is an inbuilt function in PHP and is used to randomly shuffle all the 
characters of a string passed to the function as a parameter. When a number is passed, it treats the 
number as the string and shuffles it. This function does not make any change in the original string or 
the number passed to it as a parameter. Instead, it returns a new string which is one of the possible 
permutations of the string passed to it in the parameter. */

function random_strings($length_of_string){
    $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

    // Shuffle the $str_result and returns substring of specified length
    return substr(str_shuffle($str_result), 0, $length_of_string);
}
// This function will generate Random string of length 10
echo random_strings(10);
echo "<br>";
echo random_strings(8);
echo "<br>";


/* 2. md5() Function: 
The md5() function is used to calculate the MD5 hash of a string. Pass timestamp as a argument 
and md5 function will convert them into 32 bit characters */ 

function random_strings1($length_of_string){
     // md5 the timestamps and returns substring of specified length
    return substr(md5(time()), 0, $length_of_string);
}
 echo random_strings1(10);
 echo "<br>";
 echo random_strings1(8);
 echo "<br>";


 /* 3. sha1() Function: 
 This function calculates the sha-1 hash of a string. Pass timestamps as a argument and sha1() 
 function will convert them into sha1- hash. */

//  function random_strings2($length_of_string){
//      // sha1 the timestamps and returns substring of specified length
//     return random_strings2(sha1(time()), 0, $length_of_string);
//  }
//  echo random_strings2(10);
//  echo "<br>";
//  echo random_strings2(8);
//  echo "<br>";

 /* 4.  randon_bytes() Function: 
 This function generates cryptographically secure pseudo-random bytes. It returns a string 
 containing the requested number of cryptographically secure random bytes. Use bin2hex () function 
 to convert bytes into hexadecimal format. */

 function random_strings3($length_of_string){
    // random_bytes returns number of bytes bin2hex converts them into hexadecimal format
    return substr(bin2hex(random_bytes($length_of_string)), 0, $length_of_string);

 }
 echo random_strings3(10);
echo "<br>";
echo random_strings3(8);



?>