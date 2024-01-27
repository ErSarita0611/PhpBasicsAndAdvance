<?php
// How to get Time Difference in Minutes
// 1: The date_diff() function to get the time difference in minutes.
$dateTimeObject1 = date_create('2024-01-25');
$dateTimeObject2 = date_create('2023-01-20');
$interval = date_diff($dateTimeObject1,$dateTimeObject2);
echo ("Difference in days is: ");
echo $interval->format('%R%a days');
echo "<br>";
$min = $interval->days * 24 * 60;
$min += $interval->h * 60;
$min += $interval->i;
echo ("Diference in minuts is : ");
echo $min. ' minutes';
echo "<br>";


// Example 2:
$dateTimeObject = date_create('2024-01-24');
$dateTimeObject = date_create('2023-02-14');
// Calculating the difference between DateTime Objects.
$interval = date_diff($dateTimeObject, $dateTimeObject1);
echo ("Diffence is days is: ");
// Printing the result in days formate
echo $interval->format('%R%a days');
echo "<br>";
$min = $interval->days * 24 * 60;
$min = $interval->h * 60;
$min = $interval->i;
echo ("Difference in minuts is: ");
echo $min. 'minutes';
echo "<br>";

// Example 3:

$dateTimeObject1 = date_create('19:15:00');  
$dateTimeObject2 = date_create('12:15:00');  
  
// Calculating the difference between DateTime objects 
$interval = date_diff($dateTimeObject1, $dateTimeObject2);  
  
// Printing result in hours 
echo ("Difference in hours is: "); 
echo $interval->h; 
echo "\n<br/>"; 
$minutes = $interval->days * 24 * 60; 
$minutes += $interval->h * 60; 
$minutes += $interval->i; 
  
//Printing result in minutes 
echo("Difference in minutes is: "); 
echo $minutes.' minutes'; 

?>