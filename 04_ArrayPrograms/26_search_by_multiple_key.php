

<?php

// How to search by multiple key => value 


// PHP program to search for multiple 
// key=>value pairs in array 
  
function search($array, $search_list) { 
    $result = array(); 
    foreach ($array as $key => $value) { 
        foreach ($search_list as $k => $v) { 
            if (!isset($value[$k]) || $value[$k] != $v) 
            {  
                continue 2; 
            } 
        } 
      
        $result[] = $value; 
    } 
   
    return $result; 
} 
  
// Multidimensional array for students list 
$arr = array( 
    1 => array( 
        'rollNo' => 44, 
        'name' => 'Alice', 
        'section' => 'B'
    ), 
    2 => array( 
        'rollNo' => 3, 
        'name' => 'Amit', 
        'section' => 'B'
    ), 
    3 => array( 
        'rollNo' => 3, 
        'name' => 'Bob', 
        'section' => 'A'
    ), 
    4 => array( 
        'rollNo' => 5, 
        'name' => 'sarita', 
        'section' => 'B'
    ), 
    5 => array( 
        'rollNo' => 5, 
        'name' => 'sarita', 
        'section' => 'A'
    )  
); 
$search_items = array('rollNo'=>5, 'section'=>"A"); 
$res = search($arr, $search_items); 
foreach ($res as $var) { 
    echo 'RollNo: ' . $var['rollNo'] . '<br>'; 
    echo 'Name: ' . $var['name'] . '<br>'; 
    echo 'Section: ' . $var['section'] . '<br>';         
} 
?>