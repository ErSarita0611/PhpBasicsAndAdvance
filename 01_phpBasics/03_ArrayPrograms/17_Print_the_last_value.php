<?php
//  Print the last value of an array without affecting the pointer
// array_pop(): The function is used to delete or pop the last element of an array.

$array = array('c1' => 'Delhi', 'c2' => 'Kolkata',  
                    'c3' => 'Mumbai', 'c4' => 'Bangalore'); 

               $copyarray = $array;

               $lastelement = array_pop($copyarray);
               print_r($lastelement."\n");
               print_r($array);


?>