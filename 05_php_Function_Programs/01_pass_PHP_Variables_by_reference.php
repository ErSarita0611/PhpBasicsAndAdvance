<?php

// How to pass PHP Variables by reference


function print_string( $string ) {
    $string = "function for pass variables" ."<br>";
    print($string);
}

$string = "Global function"."<br>";
print_string($string);
print($string);



/* Pass by reference: When variables are passed by reference, use & (ampersand) 
symbol need to be added before variable argument.  */

function pass_refrence( &$string ) {
    $string = "Pass by refrence" . "<be>";
    print($string);
} 

$string = "Global function" . "<br>";
print_string($string);
print($string);

?>