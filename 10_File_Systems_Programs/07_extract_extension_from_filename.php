<?php

// extract extension from a filename

// pathinfo() function: 
// This function returns information about a file. If the second optional parameter is omitted, 
// an associative array containing dirname, basename, extension, and the filename will be returned. 
// If the second parameter is true, it will return specific data.

$file_name = 'filename.html';
  $extension = pathinfo($file_name, PATHINFO_EXTENSION);
  echo $extension;
  echo "<br>";

//   end() function: 
//   It explodes the file variable and gets the last array element to be the file 
//   extension. The PHP end() function is used to get the last element of the array.

$file_name = 'filename1.html';
  $temp= explode('.',$file_name);
  $extension = end($temp);
  echo $extension;
  echo "<br>";

// substr() and strrchr() functions:

// substr(): A part of the string is returned.
// strrchr(): The last occurrence of a string inside another string is determined.

$file_name = 'filename2.html';
$extension = substr(strrchr($file_name, '.'), 1);
echo $extension;
echo "<br>";

// strrpos() function: 
// This function is used to find the last occurrence position of a ‘.’ in a 
// filename and enhances the file position by 1 to explode string (.)

$file_name = 'filename3.html';
$extension = substr($file_name, strrpos($file_name, '.') + 1);
echo $extension;
echo "<br>";

// preg_replace() function: 
// Using regular expressions like replace and search. The first parameter of this function is the 
// search pattern, the second parameter $1 is a reference to whatever matches the first (.*), 
// and the third parameter is the file name.

$file_name = 'filename4.html';
$extension = preg_replace('/^.*\.([^.]+)$/D', '$1', $file_name);
echo $extension;

?>