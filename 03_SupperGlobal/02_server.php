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

// 2. $_SERVER

// $_SERVER : It is a PHP super global variable that stores the information about headers, paths and script
//  locations. Some of these elements are used to get the information from the superglobal variable $_SERVER.


echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";

?>