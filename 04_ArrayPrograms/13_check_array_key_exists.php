<?php
// How to check a key exists in an array


/* array_key_exists() Method: 
The array_key_exists() function checks whether a specific key or index is present inside an
 array or not.*/


$array = array(
    'name' => array("sarita", "sandhya", "Dolly"),
    'rank' => array('1', '2', '3')
);
if (array_key_exists("rank", $array)) {
    echo "found the key";
}
else{
    echo "key not found";
}
echo "<br>";



/* 2: isset() Method: 
The isset() function checks whether a specific key or index is present inside an array or not.*/

$array = array(
    'name' => array("sarita", "sarita1", "sandhya"),
    'rank' => array('1', '2', '3')
);

if(isset($array["rank"])){
    echo "Found the key";
}else{
    echo "key not found";
}

?>