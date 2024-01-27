<?php
// all dates between two dates

// Function to get all the dates in given range 
function getDatesFromRange($start, $end, $format = 'Y-m-d') { 
      
    // Declare an empty array 
    $array = array(); 
      
    // Variable that store the date interval 
    // of period 1 day 
    $interval = new DateInterval('P1D'); 
    $realEnd = new DateTime($end); 
    $realEnd->add($interval); 
    $period = new DatePeriod(new DateTime($start), $interval, $realEnd); 

    // Use loop to store date into array 
    foreach($period as $date) {                  
        $array[] = $date->format($format);  
    } 
    return $array; 
} 
  
// Function call with passing the start date and end date 
$Date = getDatesFromRange('2024-10-01', '2024-10-05'); 
  
var_dump($Date); 
echo "<br>";

// Example 2: strtotime() function which is used to convert an English textual 
// date-time description to a UNIX timestamp. It returns a timestamp on success, False otherwise.
// Declare two dates 
$Date1 = '01-10-2010'; 
$Date2 = '05-10-2010'; 
  
// Declare an empty array 
$array = array(); 
  
// Use strtotime function 
$Variable1 = strtotime($Date1); 
$Variable2 = strtotime($Date2); 
  
// Use for loop to store dates into array 
// 86400 sec = 24 hrs = 60*60*24 = 1 day 
for ($currentDate = $Variable1; $currentDate <= $Variable2;  
                                $currentDate += (86400)) { 
                                      
$Store = date('Y-m-d', $currentDate); 
$array[] = $Store; 
} 
  
// Display the dates in array format 
print_r($array); 

?>