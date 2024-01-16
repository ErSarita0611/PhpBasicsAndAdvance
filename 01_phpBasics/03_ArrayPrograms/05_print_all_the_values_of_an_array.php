
<?php

// We have given an array containing some array elements and the task is to print all the 
// values of an array arr in PHP.

$array = array("sarita", "is a", "Web Developer", "1", "2","3");
foreach ($array as $item) {
    echo $item. "<br>";
}

// count() function and for loop: The count() function is used to count the number of element 
// in an array and for loop is used to iterate over the array.

$array =    array("sarita", "sandhya", "Dolly", "1", "2", "3");
$item = count($array);
for ($num=0; $num < $item; $num+= 1) { 
    echo $array[$num]. "<br>";
}


?>