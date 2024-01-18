<?php

// Second most frequent element

/* 
array_keys(): 
This function returns an array containing all the keys or subset.*/




/* arsort(): 
This function is used to sort the elements in reverse order and maintaining the index associated.*/
$arr = array(2, 2, 3, 4, 4, 4, 8, 8, 6, 6, 9, 9, 9, 9);

$arr_freq = array_count_values($arr);
arsort($arr_freq);

$new_arr = array_keys($arr_freq);

echo "Second most frequent element is:"." ".$new_arr[1];
echo "<br>";



/*array_count_values(): 
This function is used to count the frequency of all the elements and returns the associated array, 
which contains the values as key and frequency as values.*/

$arr = array("sarita", "for", "sarita");
$arr_freq = array_count_values($arr);

arsort($arr_freq);
$new_arr =  array_keys($arr_freq);
echo "second most frequent string is:"." ".$new_arr[1];

?>