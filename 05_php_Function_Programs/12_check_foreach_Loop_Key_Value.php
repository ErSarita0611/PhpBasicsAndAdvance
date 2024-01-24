<?php
// check foreach Loop Key Value

// To loop through a list of simple values.
// To loop through a list of key-value pairs.

$names = array("Sarita", "Sandhya", "Ram", "Shyam");
foreach ($names as $value) {
    echo "$value <br>";
}

$marks = array(45, 55, 60, 86);
foreach ($marks as $value) {
    echo "$value <br>";
}

$marksheet = array("sarita"=>45, "sandhya"=>56, "Dolly"=>52, "Riya"=>90);
foreach ($marksheet as $key => $value) {
    echo "$key - $value<br>";
}
?>