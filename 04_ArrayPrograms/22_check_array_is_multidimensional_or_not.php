<?php

// check an array is multidimensional or not

// rsort() function accepts one parameter.

$array = array(
    array("sarta", "sandhya", "dolly"),
    array("Hello", "world")
);

function is_multi_array( $arr ) {
    rsort( $arr );
    return isset( $arr[0] ) && is_array( $arr[0] );
}

var_dump( is_multi_array( $array )); 
echo "<br>";


// Another PHP program to check an array is multidimensional or not using count function.

$myarray = array(1 => 'a', 2 => 'b', 3 => array("this", "is", "the", "world"));
$arr = array(1 => 'a', 2 => 'b');

function is_multi($myarray){
    $rv = array_filter($myarray, 'is_array');
    if (count($rv)>0) return true; {
        return false;
    }
}
var_dump(is_multi($myarray));
var_dump(is_multi($arr));

?>