<?php

// get the time of the last modification of the current page
// getlastmod() Function: The getlastmod() function is used to get the last modification time 
// of the current page. This function is easy and powerful.


$last_modification = "Last Modified: " . date("F d Y H:i:s.", getlastmod());
echo $last_modification;
echo "<br>";

// filemtime() Function: The filemtime() function in PHP is an inbuilt function that is used
// to return the last time of a specified file when its content was modified.

echo filemtime("index.html.txt");
echo "Last Modified: ".date("F d Y H:i:s.", filemtime("index.html"));

?>