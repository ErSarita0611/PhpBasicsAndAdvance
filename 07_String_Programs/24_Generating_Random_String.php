<?php
// Generating Random String

// Example : 1
$n=10;
function getName($n) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
 
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
 
    return $randomString;
}
 
echo getName($n);
echo "<br>";


// 2: Using Hashing Functions 
// Example : 1
$str=rand();
$result = md5($str);
echo $result;
echo "<br>";

// Example : 1
$str=rand();
$result = sha1($str);
echo $result;
echo "<br>";

// Example : 1
$str = rand();
$result = hash("sha256", $str);
echo $result;
?>