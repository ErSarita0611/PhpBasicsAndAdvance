<?php

// How to log errors and warnings into a file in php

// 1: The error_log() function can be used to send error messages to a given file. First argument 
// to the function is the error message to be sent. Second argument tells where to send/log the 
// error message.

// php code for logging error into a given file 
  
// error message to be logged 
$error_message = "This is an error message!"; 
  
// path of the log file where errors need to be logged 
$log_file = "./my-errors.log"; 
  
// logging error message to given log file 
error_log($error_message, 3, $log_file); 

echo "<br>";


// Approach 2:

// The init_set() function allows a user to programmatically update configuration of the php.ini file.
// The ini_set(“log_errors”, TRUE) command can be added to the php script to enable error logging in php.
// The ini_set(‘error_log’, $log_file) command can be added to the php script to set the error logging file.
// Further error_log($error_message) function call can be used to log error message to the given file.

// error message to be logged 
$error_message = "This is an error message!"; 
  
// path of the log file where errors need to be logged 
$log_file = "./my-errors.log"; 
  
// setting error logging to be active 
ini_set("log_errors", TRUE);  
  
// setting the logging file in php.ini 
ini_set('error_log', $log_file); 
  
// logging the error 
error_log($error_message); 
?>