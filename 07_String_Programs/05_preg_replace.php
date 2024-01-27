<?php

// extract Numbers From a String 
// We can use the preg_replace() function for the extraction of numbers from the string.
// /[^0-9]/ pattern is used for finding number as integer in the string
// /[^0-9\.]/ pattern is used for finding number as double in the string

$string = '$ 90,000,000.0098'; 
    echo preg_replace("/[^0-9]/", '', $string); 
    echo "\n<br/>"; 
      
    $string2 = '$ 90,000,000.0098'; 
    echo preg_replace("/[^0-9\.]/", '', $string2); 
    echo "<br>";
    
    $string = '$ 90,000,000.0098'; 
    echo preg_replace("/[^0-9]/", '', $string); 
    echo "\n<br/>"; 
      
    $string2 = '$ 90,000,000.0098'; 
    echo preg_replace("/[^0-9\.]/", '', $string2); 
    echo "\n<br/>"; 
      
    $string3 = 'Jack has 10 red and 14 blue balls'; 
    echo preg_replace("/[^0-9]/", '', $string3); 
    echo "\n";
?>