<?php
// get last day of a month from date

// date() function: Format a local time/date.
// strtotime() function: Parse about any English textual datetime description into a Unix timestamp.

// Given a date in string format  
$datestring = '2023-04-23'; 
  
// Converting string to date 
$date = strtotime($datestring); 
   
// Last date of current month. 
$lastdate = strtotime(date("Y-m-t", $date )); 
  
  
// Day of the last date  
$day = date("l", $lastdate); 
  
echo $day; 

?>