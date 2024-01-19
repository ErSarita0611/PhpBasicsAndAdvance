<?php

// find the maximum and the minimum in array

function getmax($array){
    $n = count($array);
    $max = $array[0];
    for ($i=1; $i < $n; $i++) {
        if($max < $array[$i])
        $max = $array[$i];
    return $max;
    } 
}


// return max in array

function getmin($array)
{
    $n = count($array);
    $min = $array[0];
    for ($i=1; $i < $n; $i++) 
    if ($min > $array[$i]) {
        $min = $array[$i];
      
        return $min;
    }
}


$array = array(1, 2, 3, 4, 5);
echo (getmax($array));
echo "<br>";
echo (getmin($array));


echo "<br>";
$array = array(1, 2, 3, 4, 5);
echo(max($array));
echo("\n");
echo(min($array));

?>