<?php
// Converting string to Date and DateTime
// converting a string to date
$time_input = strtotime("2011/05/21");  
$date_input = getDate($time_input);  
print_r($date_input);
echo "<br>";

// converting a string to dateTime

$input = '06/10/2011 19:00:02'; 
$date = strtotime($input); 
echo date('d/M/Y h:i:s', $date);
echo "<br>";

// Note1 We can use “D” in the place of “d” for getting the day in the output

$input = '05/10/2011 15:00:02'; 
$date = strtotime($input); 
echo date('D/M/Y h:i:s', $date); 
echo "<br>";

// Note 2 We can use “H” in the place of “h” for getting the time in 24 Hour format in the output

$input = '05/10/2011 15:00:02'; 
$date = strtotime($input); 
echo date('D/M/Y H:i:s', $date);


?>