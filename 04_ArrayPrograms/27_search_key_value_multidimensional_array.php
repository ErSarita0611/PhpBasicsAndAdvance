<?php


// search by key=>value in a multidimensional array

function search($array, $key, $value) { 
    $results = array(); 
      
    if (is_array($array)) {  
        if (isset($array[$key]) && $array[$key] == $value) { 
            $results[] = $array; 
        } 
        foreach ($array as $subarray) { 
            $results = array_merge($results,  
                    search($subarray, $key, $value)); 
        } 
    } 
  
    return $results; 
} 
$arr = array( 
    "A" => array( 
        1 => array('rollNo'=>101, 'name'=>"AMIT"), 
        2 => array('rollNo'=>102, 'name'=>"BHUWAN"), 
        3 => array('rollNo'=>103, 'name'=>"BOB"), 
        4 => array('rollNo'=>104, 'name'=>"CAROT") 
    ), 
    "B" => array( 
        1 => array('rollNo'=>201, 'name'=>"ABHISHEK"), 
        2 => array('rollNo'=>202, 'name'=>"AMIT"), 
        3 => array('rollNo'=>203, 'name'=>"RONNY"), 
        4 => array('rollNo'=>204, 'name'=>"LOBO") 
    ), 
    "C" => array( 
        1 => array('rollNo'=>301, 'name'=>"ANMOL"), 
        2 => array('rollNo'=>302, 'name'=>"TONNY"), 
        3 => array('rollNo'=>303, 'name'=>"SANJI") 
    ) 
); 
  
$res = search($arr, 'name', 'AMIT'); 
  
foreach ($res as $var) { 
    echo $var["rollNo"]." - ".$var['name'] . "<br>"; 
} 





// Function to iteratively search for a 
// given key=>value   
function search1($array, $key, $value) { 
    $arrIt = new RecursiveArrayIterator($array); 
   
    $it = new RecursiveIteratorIterator($arrIt); 
   
    foreach ($it as $sub) { 
   
        // Current active sub iterator 
        $subArray = $it->getSubIterator(); 
   
        if ($subArray[$key] === $value) { 
            $result[] = iterator_to_array($subArray); 
         } 
    } 
    return $result; 
} 
   
// Multidimensional array for students list 
$arr = array( 
    "A" => array( 
        1 => array('name'=>"Alice", 'location'=>"Dehradun"), 
        2 => array('name'=>"BHUWAN", 'location'=>"Mumbai"), 
        3 => array('name'=>"BOB", 'location'=>"Delhi"), 
        4 => array('name'=>"CAROT", 'location'=>"Haryana") 
    ), 
    "B" => array( 
        1 => array('name'=>"ABHISHEK", 'location'=>"Dehradun"), 
        2 => array('name'=>"AMIT", 'location'=>"Delhi"), 
        3 => array('name'=>"RONNY", 'location'=>"Bengaluru"), 
        4 => array('name'=>"LOBO", 'location'=>"Pune") 
    ), 
    "C" => array( 
        1 => array('name'=>"ANMOL", 'location'=>"Delhi"), 
        2 => array('name'=>"TONNY", 'location'=>"Delhi"), 
        3 => array('name'=>"SANJI", 'location'=>"Haryana") 
    ) 
); 
   
$res = search1($arr, 'location', 'Delhi'); 
   
foreach ($res as $var) { 
    echo $var["name"]." - ".$var['location'] ."<br>"; 
} 
?>