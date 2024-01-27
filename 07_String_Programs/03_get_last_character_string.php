<?php

// get the last character of a string 
// we will find the last character of a string in PHP. The last character can be found using the 
// following methods.

// Using array() method
// Using substr() method
$txt = "India is the best";
echo "Last character of string is: " .$txt[strlen($txt)-1];
echo "<br>";

$txt = "I Love My Self";
echo "The Last character of string is: ". substr($txt, strlen($txt)-1);
echo "<br>";

$txt = "Hello World";
echo "The last charecter of string is: "  .substr($txt,-1);
?>