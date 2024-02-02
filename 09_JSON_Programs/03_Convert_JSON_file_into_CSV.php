<?php 

// Convert JSON file into CSV
// fopen() Method: It is used to open a file.
// Syntax:

// fopen( filename, file_mode )

// fclose() Method: It is used to close the file.
// Syntax:

// fclose( $file_pointer );

// fputcsv() Method: It is used to place the data into CSV file.
// Syntax:

// fputcsv( file, fields )


$jsondata =  '[ 
    {"student":"sarita kumari","age":"24","subject":"java"},
    {"student":"sandhya kumari","age":"25","subject":"react"},
    {"student":"riya kumari","age":"23","subject":"nodjs"},
    {"student":"dolly kumari","age":"24","subject":"php"}]';
   
// Decode json data and convert it  into an associative array 
$jsonans = json_decode($jsondata, true); 
   
// CSV file name => geeks.csv 
$csv = 'json.csv'; 
   
// File pointer in writable mode 
$file_pointer = fopen($csv, 'w'); 
   
// Traverse through the associative  array using for each loop 
foreach($jsonans as $i){ 
      
    // Write the data to the CSV file 
    fputcsv($file_pointer, $i); 
} 
   
// Close the file pointer. 
fclose($file_pointer); 

?>