<?php
/* 1: Using implode() Method:
The implode() method is used to join an array of elements that are 
separated by a string. Joining can be done with or without separator.*/

function get_string ($arr) { 
      
    echo implode($arr);    
    echo implode("-", $arr);  
} 
$arr = array('sarita','is','web developer',"\n"); 
$str = get_string ($arr);

echo "<br>";



/* 2: Using join() Method: 
The join() method is used to join an array of elements that are separated by a string.
Joining can be done with or without separator. The join() method is same as the implode()*/

function get_strings ($arr){ 
    echo join($arr);
    echo join("-", $arr);  
} 
  

$arr = array('Geeks','for','Geeks',"\n"); 
$str = get_strings ($arr); 

?>