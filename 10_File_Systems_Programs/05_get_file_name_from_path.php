<?php

// How to get file name from a path in PHP

// 1: Using basename() function:

// The basename() function is an inbuilt function that returns the base name of a file if the path 
// of the file is provided as a parameter to the basename() function. 

// Syntax:
// $filename = basename(path, suffix);

$path = "/testweb/var/www/mywebsite/htdocs/home.php"; 
  
  $file1 = basename($path); 
  $file2 = basename($path, ".php"); 
  
  // Show filename with file extension 
  echo $file1 . "\n"; 
  
  // Show filename without file extension 
  echo $file2;
  echo "<br>";


//   2: Using pathinfo() function:

// The pathinfo() is an inbuilt function that is used to return information about a path using an 
// associative array or a string ie., It will create an array with the parts of the path we want to use.

// Syntax:

// $filename = pathinfo(path);

// Path of the file stored under pathinfo 
$myFile = pathinfo('/usr/admin/config/test.php'); 
  
// Show the file name 
echo $myFile['basename'], "\n"; 

?>