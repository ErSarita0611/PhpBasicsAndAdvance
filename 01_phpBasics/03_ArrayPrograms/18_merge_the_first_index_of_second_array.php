<?php
// merge the first index of an array with the first index of second array
// array_merge() function will give you the desired result.

$array1 = array("a","b","c","d");
$array2 = array("d","e","f","g");
$result = array_merge($array1,$array2);
var_dump($result);
echo "<br>";


// 2: Program to merge 2 simple arrays 

$array1 = array("a","b","c");
$array2 = array("c","d","e");
$result =array();
foreach ($array1 as $key => $value) {
    $val=$array2[$key];
    $result[$key]=array($value,$val);
}
var_dump($result);
echo "<br>";


// 3: Program to merge 2 complex arrays 
$array1 = array(array("a","b"),array("c","d"));
$array2 = array(array("z","y"),array("x", "w"));
$result = array();
foreach ($array1 as $key => $value) {
    $val=$array2[$key];
    $result[$key]=array($value,$val);
}
var_dump($result);



?>