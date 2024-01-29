<?php

// How to generate Json File

// Properties:

// JSON doesn’t use an end tag
// It is shorter.
// It is quicker to read and write.
// It can use arrays.

$myJson = new stdClass(); 
$myJson->name = "Rani";
$myJson->age = 40;
$myJson->city = "Hyderabad";
$myJson->profession = "Doctor";
 
$myJSONvar = json_encode($myJson);
 
echo $myJSONvar;
 
// Generate json file
file_put_contents("result_data.json", $myJSONvar);
echo "<br>";



// Input data  through array
$array = Array (
    "0" => Array (
        "id" => "7020",
        "name" => "Bobby",
        "Subject" => "Java"
    ),
    "1" => Array (
         "id" => "7021",
        "name" => "ojaswi",
        "Subject" => "sql"
    )
);
 
// Encode array to json
$json = json_encode($array);
 
// Display it 
echo "$json";
 
// Generate json file
file_put_contents("geeks_data.json", $json);

?>