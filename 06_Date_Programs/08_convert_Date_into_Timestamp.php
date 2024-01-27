<?php

// convert a Date into Timestamp

// PHP program to convert the date to timestamp 
$date = "2024-09-25";
$timestamp1 = strtotime($date);
echo  $timestamp1;
echo "<br>";

$date2 = "24-09-2024";
$timestamp2 = strtotime($date2);
echo $timestamp2;
echo "<br>";

$date3 = "16 may 2019";
$timestamp3 = strtotime($date3);
echo $timestamp3;

?>