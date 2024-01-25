<?php
// How to get Time Difference in Minutes
// 1: The date_diff() function to get the time difference in minutes.
$dateTimeObject1 = date_create('2024-01-25');
$dateTimeObject2 = date_create('2023-01-20');
$interval = date_diff($dateTimeObject1,$dateTimeObject2);
echo ("Diff")

?>