
<?php
// Check if two arrays contain same elements

// Use the sort() function to sort an array element and then use the equality operator.
// Use array operator ( == ) in case of Associative array.

// example to check equality of two arrays using the sorting technique and equal operator.


$arr1 = array(4, 5, 6, "sarita", 52, 61);
$arr2 = array(1, 5, 6, "sandhya", 58, 96, 58);

sort($arr1);
sort($arr2);

if($arr1 == $arr2)
echo "Both arrays are same\n";
else 
echo "Both arrays are not same\n";

$arr3 = array(5, 6, "car", "sarita", 8, 9);
$arr4 = array(4, "hello", "sarita", 9, 8, 7);

sort($arr3);
sort($arr4);

if($arr3 == $arr4)
echo "Both arrays are same\n";
else
echo "Both arrays are not same\n";
echo "<br>";


// example to check the equality of two associative arrays.

$arr1 = array(
    'first' => 'sarita',
    'second' => 'is',
    'last' => 'Web Developer'
);
$arr2 = array(
    'first' => 'Sandhya',
    'second' => 'is',
    'last' => 'Web Developer'
);

// check for equality
if($arr1 == $arr2)
  echo "Both arrays are same\n";
else
  echo "Both arrays are not same\n";

$arr3 = array(
    'first' => 'Riya',
    'second' => 'is a',
    'last' => 'Civil Engineer'
);

$arr4 = array(
    'first' => 'Dolly',
    'second' => 'is a',
    'last' => 'Softwere Developer'
);

if($arr3 == $arr4)
  echo "Both arrays are same";
else
  echo "Both arrays are not same";

?>