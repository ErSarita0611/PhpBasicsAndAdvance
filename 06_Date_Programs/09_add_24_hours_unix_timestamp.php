<?php
// add 24 hours to a unix timestamp

echo time() + (24*60*60);
echo "<br>";  
echo strtotime("now"), "<br>"; 
echo strtotime('+1 day');
echo "<br>"; 


// Get current time stamp 
$now = new DateTime(); 
$now->format('Y-m-d H:i:s');     
echo $now->getTimestamp(), "<br>";    
  
// Add interval of P1D or Period of 1 Day 
$now->add(new DateInterval('P1D')); 
echo $now->getTimestamp();
?>