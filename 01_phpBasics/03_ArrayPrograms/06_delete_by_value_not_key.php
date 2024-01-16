<?php

//array_search() method:

/* The value is first looked for in the array and then deleted successively. 
The array_search() method is used to search the array for a specified value.
 If it is successful, it returns the first corresponding key. The array_search() 
 method is case-sensitive in terms of matching the specified value with the iterated 
 values of the array. If there are multiple occurrences of the same value, only 
 one is fetched out of it. */


// 1: unset() method:

/* The unset() function in PHP is used to reset any variable. If unset() is called upon a 
   user-defined function, it unsets the local variables. There can be many values that can be
   specified as arguments of this function. At least one variable is mandatory in the unset() method.*/ 

//    Return value: The unset() function does not return any value.

# declearing an associative array
$arr = array(
    0 => "Developer of",
    1 => "PHP",
    2 => "Java",
    3 => "Python"
);
# printing original array
echo ("Original array: \n");
var_dump($arr);
# Declearing the value to delete
$val = "PHP";
# find the key of basis of value
$key = array_search($val, $arr);
if (($key) !==false) {
    # Deleting the key found 
    unset($arr[$key]);
}
echo ("<br><br>Modified Array: \n");
var_dump($arr);
echo "<br>";



// 2: array_diff() method 

/*The array_diff() function in PHP is used to compare the values of two (or more) arrays 
and return the differences. It returns an array that contains the entries from array1 that 
are not contained in array2 or array3,
The difference in comparison to the earlier method is that all the instances of the specified
values are removed from the main array.*/

// arr: The array which is compared to the rest of the arrays from.
// array1, array2….: The arrays to compare against the main array.

$arr = array(
    0 => "sarita",
    1 => "Dolly",
    3 => "Sandhya",
    3 => "Riya",
    4 => "Anu"
);
echo ("Original arry: \n");
var_dump($arr);
$val = array(
    "sarita"
);
$arr = array_diff($arr, $val);
echo ("<br><br>Modified array: \n");
var_dump($arr);
echo "<br>";


// the keys are not numerical
$arr = array(
    "key1" => "sarita",
    "key2" => "Dolly",
    "key3" => "Sandhya",
    "key4" => "Riya",
    "key5" => "Anu"
);
echo ("Original arry: \n");
var_dump($arr);
$val = array(
    "sarita"
);
$arr = array_diff($arr, $val);
echo ("<br><br>Modified array: \n");
var_dump($arr);
echo "<br>";
 ?>