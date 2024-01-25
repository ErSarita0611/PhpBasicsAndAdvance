<?php
// convert DateTime to String

$today = date("d/m/Y H:i:s");     
  
if ($today) {  
    echo $today;  
  
// If unknown time  
} else {   
    echo "can't display time";  
} 
echo "<br>";
// Using list method to display the datetime 
list($day, $month, $year, $hour, $min, $sec)  
        = explode("/", date('d/m/Y/h/i/s'));  
  
// Display the datetime 
echo $month . '/' . $day . '/' . $year . ' '
    . $hour . ':' . $min . ':' . $sec; 
?>