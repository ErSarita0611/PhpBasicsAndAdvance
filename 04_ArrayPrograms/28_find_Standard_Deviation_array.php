<?php

// find the Standard Deviation of an array

// array_sum(): The function returns the sum of all the elements of an array.
// count(): This function gives the number of elements currently present in the given array.
// sqrt(): The function returns the square root of the given number.

// function to calculate the standard deviation 
    // of array elements 
    function Stand_Deviation($arr) 
    { 
        $num_of_elements = count($arr); 
          
        $variance = 0.0; 
          
                // calculating mean using array_sum() method 
        $average = array_sum($arr)/$num_of_elements; 
          
        foreach($arr as $i) 
        { 
            // sum of squares of differences between  
                        // all numbers and means. 
            $variance += pow(($i - $average), 2); 
        } 
          
        return (float)sqrt($variance/$num_of_elements); 
    } 
      
    // Input array 
    $arr = array(2, 3, 5, 6, 7); 
      
    print_r(Stand_Deviation($arr)); 

?>