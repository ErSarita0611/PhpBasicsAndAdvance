<?php

// Convert XML data into JSON
// Differences between JSON and XML:

    // JSON	                                                XML
    // JSON doesn’t use an end tag	                   XML uses end tag
    // JSON is shorter than XML	                       XML is longer than JSON
    // JSON is quicker to read and write	           XML is a bit slower than JSON
    // Arrays can be used by JSON	                   XML can not use arrays.


     
// student details xml data taken as an String
$xml = '<?xml version="1.0" encoding="utf-8"?>
<student>
    <details>
        <address>
            <firstname>sravan kumar</firstname>
            <city>kakumanu</city>
            <zip>522112</zip>
        </address>
    </details>
    <details>
        <address>
            <firstname>sudheer</firstname>
            <city>guntur</city>
            <zip>522112</zip>
        </address>
    </details>
    <details>
        <address>
            <firstname>radha kumar</firstname>
            <city>ponnur</city>
            <zip>456345</zip>
        </address>
    </details>
    <details>
        <address>
            <firstname>vani</firstname>
            <city>noida</city>
            <zip>456644</zip>
        </address>
    </details>
</student>';
  
// Load xml data into xml data object
$xmldata = simplexml_load_string($xml);
 
// Encode this xml data into json using json_encode function
$jsondata = json_encode($xmldata);
  
// Display json data
print_r($jsondata);
 
?>