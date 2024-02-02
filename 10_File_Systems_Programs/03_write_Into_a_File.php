<?php


// The fwrite() function is used to write into the given file. It stops at the end of the file or
//  when it reaches the specified length passed as a parameter, whichever comes first. The file has 
//  to close by using the PHP fclose() function.

// Syntax:

// fwrite(file_name, string)

// Open a file named geeks_data in write mode
$data = fopen("mydata.txt", "w");
 
// writing content to a file using fwrite() function
echo fwrite($data, "This data is added as extra");
 
// closing the file
fclose($data);
echo "<br>";


// Example 2:

// Open a file named geeks_data in write mode
$data = fopen("mydata1.txt", "w");
 
// writing content to a file using fwrite() function
echo fwrite($data, "This data is added as extra 
                    along with previous data");
 
// closing the file
fclose($data);
?>