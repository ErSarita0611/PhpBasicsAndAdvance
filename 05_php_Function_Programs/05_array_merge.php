<?php

// Merging two or more arrays using array_merge()

/* The array_merge() is a builtin function in PHP and is used to merge two or more arrays into
a single array. This function is used to merge the elements or values of two or more arrays 
together into a single array. */

$my_array1 = array("size" => "big", 2,3 ); 
$my_array2 = array("a", "b", "size" => "medium", 
                        "shape" => "circle", 4); 
$res = array_merge($my_array1, $my_array2); 
  
print_r($res); 
echo "<br>";


$my_array = array(1 => "Geeks", 3=>"for", 2=>"Geeks"); 
  
$res = array_merge($my_array); 
print_r($res);
echo "<br>";


$my_array1 = array(0 => 'zero_a', 2 => 'two_a', 3 => 'three_a'); 
$my_array2 = array(1 => 'one_b', 3 => 'three_b', 4 => 'four_b'); 
$res = array_merge($my_array1,$my_array2); 
print_r($res); 
  


?>