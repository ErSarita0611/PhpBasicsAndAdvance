<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="cyan">

<?php

// Below is the list of superglobal variables available in PHP: 

// 1. $GLOBALS
// 2. $_SERVER
// 3. $_REQUEST
// 4. $_GET
// 5. $_POST
// 6. $_SESSION
// 7. $_COOKIE
// 8. $_FILES
// 9. $_ENV


// 4. $_GET : 

/* $_GET is a super global variable used to collect data from the HTML form after submitting it.
   When form uses method get to transfer data, the data is visible in the query string, therefore
   the values are not hidden. $_GET super global array variable stores the values that come in the URL.*/



$name = $_GET['name'];
$city = $_GET['city'];
echo "<h1>This is ".$name." of ".$city."</h1><br>";
?>
<img src = "2.jpg" alt = "nanilake" height = "400" width="500" />
    
</body>
</html>