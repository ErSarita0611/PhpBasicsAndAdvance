<?php
// Convert timestamp to readable date/time
// date() function, which is an inbuilt function in PHP can be used to format the timestamp 
// given by time() function. 

echo date('m/d/Y H:i:s', 1541843468);
echo "<br>";
echo date('m/d/Y H:i:s', time()); 
?>