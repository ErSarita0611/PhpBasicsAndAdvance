<?php

// Sort array of objects by object fields

/* The usort() function is an inbuilt function in PHP which is used to sort the array
of elements conditionally with a given comparator function. The usort() function can also
be used to sort an array of objects by object field. Call usort() function with first argument
as the array of objects and second argument as the comparator function on the basis of which 
comparison between two array objects has to be made.*/

// PHP program to show sorting of  
// array of objects by object fields

// PHP program to show sorting of  
// array of objects by object fields 
  
// School Data array 
$gfg_array = array( 
    array( 
        'score' => '100', 
        'name' => 'Sam', 
        'subject' => 'Data Structures'
    ), 
    array( 
        'score' => '50', 
        'name' => 'Tanya', 
        'subject' => 'Advanced Algorithms'
    ), 
    array( 
        'score' => '75', 
        'name' => 'Jack', 
        'subject' => 'Distributed Computing'
    ) 
); 
  
// Class for encapsulating school data 
class geekSchool { 
      
    var $score, $name, $subject; 
  
    // Constructor for class initialization 
    public function geekSchool($data) { 
        $this->name = $data['name']; 
        $this->score = $data['score']; 
        $this->subject = $data['subject']; 
    } 
} 
  
// Function to convert array data to class object 
function data2Object($data) { 
    $class_object = new geekSchool($data); 
    return $class_object; 
} 
  
// Comparator function used for comparator 
// scores of two object/students 
function comparator($object1, $object2) { 
    return $object1->score > $object2->score; 
} 
  
// Generating array of objects 
$school_data = array_map('data2Object', $gfg_array); 
  
// Printing original object array data 
print("Original object array:\n"); 
  
print_r($school_data); 
  
// Sorting the class objects according  
// to their scores 
usort($school_data, 'comparator'); 
  
// Printing sorted object array data 
print("\nSorted object array:\n"); 
  
print_r($school_data); 

?>