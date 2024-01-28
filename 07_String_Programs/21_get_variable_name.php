<?php

// get a variable name as a string

$test = "This is a String ";
function getVariableName($var){
    foreach ($GLOBALS as $varName => $value) {
        if ($value === $var) {
            return $varName;
        }
    }
    return;
}
print getVariableName($test);

?>