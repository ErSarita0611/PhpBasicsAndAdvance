
<?php
// How to count all array elements

/* 1: count() Method: The count() method is used to count the current elements in an array.
 It returns 0 for an empty array. */

 $array = array("sarita1", "sarita2", "sarita", "sarita4", "1", "2", "3", "4");
 echo "Count first array elements: ". count($array) . "\n";

 $array = array(
    "name" => array("sarita1", "sarita2", "sarita3", "sarita4"),
    "rank" => array('1', '2', '3', '4')
 );
 echo "Recursive count: ". count($array, 1). "\n";
 echo "Normal coungt: " . count($array, 0);
 echo "<br>";



//  2: sizeof() Method:
//   The sizeof() method is used to count the number of elements present in an array or any 
//   other countable object.

$array = array("Geek1", "Geek2",  
           "Geek3", "1", "2","3"); 
  
echo "Count second array elements: "
              . sizeof($array) . "\n";  
  
$array = array( 
      'names' => array("Geek1", "Geek2", "Geek3"),  
      'rank' => array('1', '2', '3') 
);  
  
echo("Recursive count: " . sizeof($array, 1) . "\n");  
echo("Normal count: " . sizeof($array, 0) . "\n");


?>