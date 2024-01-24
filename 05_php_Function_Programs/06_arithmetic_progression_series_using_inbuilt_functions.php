<?php

// print an arithmetic progression series using inbuilt functions

/* range() function: 
This function is used to create an array of elements of any kind such as integers, or alphabets within
a given range(from low to high) i.e, list’s first element is considered as low and the last one is
considered as high.

implode() function: 
If we have an array of elements, we can use the implode() function to join them all to form one string.
We basically join array elements with a string. */

$a = 1;
$b = 100;
$d = 15;
 
$arr = range($a,$b,$d);
 
echo implode(", ",$arr);


?>