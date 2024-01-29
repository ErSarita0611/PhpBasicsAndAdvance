<?php
// check a string is a rotation of another string

/* strpos(): 
The function generally accepts the two parameters first one to specify the string to be searched 
and the other one to find in the specified string. */

function rotation_string($string1, $string2) 
{ 
    // if both strings are not same length then stop 
    if (strlen($string1) != strlen($string2)) 
       echo "No"; 
       
     // concatenate $string1 to itself, if both strings are of same length
     if (strlen($string1) == strlen($string2)) 
        $string1 = $string1.$string1; 
        
     if (strpos($string1, $string2) > 0) 
        echo "Yes"; 
     else 
        echo "No"; 
} 

// Driver code 
$string1 = "WayToCrack"; 
$string2 = "CrackWayTo";         
rotation_string($string1, $string2);

?>