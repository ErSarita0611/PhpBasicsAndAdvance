<?php

// Type Casting and Conversion of an Object to an Object of other class

// Objects which are instances of a standard pre-defined class can be converted into object of
//  another standard class.

$a = 1;
var_dump($a);
echo "<br>";
// int to float 
$a = (float) $a;
var_dump($a);
echo "<br>";

// float to double 
$a = (double) $a;
var_dump($a);
echo "<br>";

// double to int 
$a = (int) $a; 
var_dump($a);
echo "<br>";

// int to integer 
$a = (integer) $a; 
var_dump($a); 
echo "<br>";

// integer to bool
$a = (bool) $a;
var_dump($a);
echo "<br>";

// bool to boolean
$a = (boolean) $a;
var_dump($a);
echo "<br>";

// boolean to string 
$a = (string) $a;
var_dump($a);
echo "<br>";

// string to array
$a = (array) $a;
var_dump($a);
echo "<br>";

// array to object 
$a = (object) $a;
var_dump($a);
echo "<br>";

// object to unset/NULL 
// $a = (unset) $a;
// var_dump($a);


// 2: Create a constructor for final class and add a foreach loop for assignment of all properties 
// of initial class to instance of final class.

// PHP program to convert an class object  to object of another class
// Original class
class myclass1{
    var $a = 'Hello world';
    function print_myclass1(){
        print('This is my world');
    }
}
// Final class 
class myclass2{
    public function __construct($object){
        // Initializing class properties 
        foreach ($object as $property => $value) {
            $this->$property = $value;
        }
    }

}

$object1 = new myclass1();
print_r($object1);
// Initializing an object of class myclass2  using an object of class myclass1 
$object1 = new myclass2($object1);
// Printing object of class myclass2
print_r($object1);
echo "<br>";


// 3: Write a function to convert object of the initial class into serialized data using serialize() 
// method. Unserialize this serialized data into instance of the final class using unserialize() method.

class myclass4 { 
      
    var $a = 'Hello world'; 
      
    function print_geeksforgeeks() { 
        print('geeksforgeeks'); 
    } 
} 
  
// Final class 
class myclass5 { 
      
    /* Empty abstract class */
} 
  
// Function to convert class of given object 
function convertObjectClass($object, $final_class) { 
    return unserialize(sprintf( 
        'O:%d:"%s"%s', 
        strlen($final_class), 
        $final_class, 
        strstr(strstr(serialize($object), '"'), ':') 
    )); 
} 
  
// Initializing an object of class myclass5 
$object1 = new myclass4(); 
  
// Printing original object of class myclass4 
print_r($object1); 
  
// Converting an object of class myclass4 into an object of class myclass5
$object1 = convertObjectClass($object1, 'myclass5'); 
  
// Printing object of class myclass5 
print_r($object1);  

?>