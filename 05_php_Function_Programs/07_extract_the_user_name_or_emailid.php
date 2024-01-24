<?php

// How to extract the user name from the email ID using PHP
// strstr() to extract the username from the email address.
/* “@” symbol is the separator for the domain name and user name of the email address.
The strstr() PHP function is used to search for the first occurrence of a string */

 // Define Email Address 
 $email  = 'saritakumari7750@gmail.com'; 
  
 // Get the username by slicing string 
 $username = strstr($email, '@', true); 
 
 // Display the username 
 echo $username."\n"; 



 // Define Email Address 
$email  = 'sandy98@.com'; 
  
// Get the username by dividing mailid using'@' as separator 
$parts = explode("@",$email); 
$username = $parts[0]; 
  
// Display the username 
echo $username."\n"; 




?>