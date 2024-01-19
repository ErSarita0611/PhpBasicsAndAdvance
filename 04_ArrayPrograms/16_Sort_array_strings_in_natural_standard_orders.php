<?php

// Sort array of strings in natural and standard orders

function printArray($arr)
{
    foreach ($arr as $value) {
        echo "$value";
    }
}

$arr = array("Hello", "to", "sarita", "for", "sarita");
$stander_result = $arr;
sort($stander_result);
echo "Array after Standard sorting:";
printArray($stander_result);
echo "<br>";

$natural_result = $arr;
natcasesort($natural_result);
echo "\nArray after natural sorting:";
printArray($natural_result);


?>