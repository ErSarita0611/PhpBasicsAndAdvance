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
  echo "<br>";

  // 2: The following method uses a predefined function pathinfo(). In the output, the “Name:”
  //  shows the name of the file and “Extension:” shows the file extension.

  $path = $_SERVER['SCRIPT_NAME'];
  $name = pathinfo($path, PATHINFO_EXTENSION);
  $ext = pathinfo($path, PATHINFO_FILENAME);
  echo "Name: ", $name;
  echo "<br> Extension: ", $ext;
  echo "<br>";

  // 3: The following code uses the predefined function parse_url() and pathinfo() for URLs.
  $url = "http://www.xyz.com/dir/file.index.php?Something+is+wrong=hello";
  $url = parse_url($url);
  $name = pathinfo($url['path'], PATHINFO_FILENAME);
  $ext = pathinfo($url['path'], PATHINFO_EXTENSION);
  echo "Name: ", $name;
  echo "<br> Extension: ", $ext;

  ?>