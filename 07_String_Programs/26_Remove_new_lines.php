<?php

// Remove new lines from string
$text = "Hello \nwelcome to \nsarita"; 
echo $text; 
  
echo "\n"; 
$text = str_replace("\n", "", $text); 
echo $text; 


?>