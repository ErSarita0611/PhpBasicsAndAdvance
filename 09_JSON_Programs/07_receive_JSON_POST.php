<?php
// receive JSON POST
// php://input: This is a read-only stream that allows us to read raw data from the request body. 
// It returns all the raw data after the HTTP headers of the request, regardless of the content type.
// file_get_contents() function: This function in PHP is used to read a file into a string.
// json_decode() function: This function takes a JSON string and converts it into a PHP variable 
// that may be an array or an object.
$json = '["geeks", "for", "geeks"]';
$data = json_decode($json);
echo $data[0];
echo "<br>";


$json = '{
    "title": "PHP",
    "site": "GeeksforGeeks"
}';
$data = json_decode($json);
echo $data->title;
echo "\n";
echo $data->site;
?>