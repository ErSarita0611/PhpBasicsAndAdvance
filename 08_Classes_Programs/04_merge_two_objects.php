<?php

// How to merge two PHP objects
// array_merge() function and convert this merged array back into object of class stdClass.

class myfunction{
    // Empty class
}
$objectA = new myfunction();
$objectA->a = 1;
$objectA->b = 2;
$objectA->c = 3;

$objectB = new myfunction();
$objectB->d = 4;
$objectB->e = 5;
$objectB->f = 6;

$obj_merged = (object) array_merge(
    (array) $objectA, (array) $objectB);
    print_r($obj_merged);
    echo "<br>";


// 2: Merge the object using array_merge() method and convert this merged array to object using 
// convertObjectClass function. This function is used to convert object of the initial class into 
// serialized data using serialize() method. Unserialize the serialized data into instance of the final 
// class using unserialize() method. 

// PHP program to merge two objects
class unserializeFunction {
    // Empty class
}
$objectA = new unserializeFunction();
$objectA->a = 1;
$objectA->b = 2;
$objectA->d = 3;

$objectB = new unserializeFunction();
$objectB->d = 4;
$objectB->e = 5;
$objectB->f = 6;

// Function to convert class of given object
function convertObjectClass($array, $final_class) {
    return unserialize(sprintf(
        'O:%d:"%s"%s',
        strlen($final_class),
        $final_class,
        strstr(serialize($array), ':')
    ));
}

$obj_merged = convertObjectClass(array_merge(
    (array) $objectA, (array) $objectB), 'Geeks');

print_r($obj_merged);
echo "<br>";


// 3: Create a new object of the original class and assign all the properties of both objects 
// to this new object by using foreach loop. This is a simple and clean approach of merging two objects.

class Initializingclass {
    // Empty class
}
 
$objectA = new Initializingclass();
$objectA->a = 1;
$objectA->b = 2;
$objectA->d = 3;
 
$objectB = new Initializingclass();
$objectB->e = 4;
$objectB->f = 5;
$objectB->g = 6;
 
// Function to convert class of given object
function convertObjectClass1($objectA,
                $objectB, $final_class) {
 
    $new_object = new $final_class();
 
    // Initializing class properties
    foreach($objectA as $property => $value) {
        $new_object->$property = $value;
    }
     
    foreach($objectB as $property => $value) {
        $new_object->$property = $value;
    }
 
    return $new_object;
}
 
$obj_merged = convertObjectClass1($objectA, 
                        $objectB, 'Initializingclass');
                         
print_r($obj_merged);

?>