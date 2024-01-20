<?php

// php serialize() and unserialize() Function
// serialize() and unserialize() functions are handy to deal with those complex data structures.

/*Serialize() Function: 
The serialize() is an inbuilt function PHP that is used to serialize
the given array. The serialize() function accepts a single parameter which is the data we want
to serialize and returns a serialized string. */

$myvar = array(
    'hello', 42,
    array(1, 'two'),
    'apple'
);
$string = serialize($myvar);
echo $string;
echo "<br>";


/* Unserialize() Function: 
The unserialize() is an inbuilt function php that is used to unserialize 
the given serialized array to get back to the original value of the complex array, $myvar. */

$myvar = array(
    'hello', 52,
    array(2, 'tree'),
    'apple'
);
$newvar = unserialize($string);
print_r($newvar);

?>