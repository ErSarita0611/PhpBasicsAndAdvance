<?php

// $_SERVER[‘SCRIPT_NAME’]:
// $_SERVER is an array of stored information such as headers, paths, and script locations.
// 1: The following method uses the strpos() and substr() methods to print the values of the 
// last occurrences.

function fileExtension($s) {
    // strrpos() function returns the position 
    // of the last occurrence of a string inside 
    // another string.
    $n = strrpos($s,".");
     
    // The substr() function returns a part of a string.
    if($n===false)  
      return "";
    else
      return substr($s,$n+1);
  }
       
  // To Get the Current Filename.
  $currentPage= $_SERVER['SCRIPT_NAME'];
   
  //Function Call
  echo fileExtension($currentPage);
?>