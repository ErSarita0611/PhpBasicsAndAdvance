<?php

// Program to Insert new item in array on any position in PHP

// New item in an array can be inserted with the help of array_splice() function of PHP.
//  This function removes a portion of an array and replaces it with something else.
//   If offset and length are such that nothing is removed,


//Original Array on which operations is to be perform 
$original_array = array('1', '2', '3', '4', '5');
echo 'Original array : ';
foreach ($original_array as $x) {
    echo "$x ";
}

echo "<br>";
// Value of new item
$inserted_value = '11';

// Value of position at which insertion is to be done
$position = 2;

// array_splice() function

array_splice( $original_array, $position, 0, $inserted_value );
echo "After inserting 11 in the array is : ";
foreach ($original_array as $x) {
    echo "$x ";
}
?>