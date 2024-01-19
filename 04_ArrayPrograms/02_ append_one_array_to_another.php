
<?php

// PHP append one array to another

// array_merge function: This function returns a new array after merging the two arrays.

$arr1 = array("sarita", "kumari");
$arr2 = array("Computer Science" , "Engineer");

// Get the merged array in the first array itself.
$arr1 = array_merge($arr1, $arr2);

echo "arr1 contents:";

// user for each loop to print all the array elements.
foreach ($arr1 as $value) {
    echo $value . "<br>";
}


$r1 = array(1, 2);
$r2 = array(3, 4);

// r1 elements are being puched in the r1.
array_push($r1 , ...$r2);
echo "r1 = ";

// use for each loop to print all the array element.
foreach ($r1 as $value) {
    echo $value . ' ';
}
?>