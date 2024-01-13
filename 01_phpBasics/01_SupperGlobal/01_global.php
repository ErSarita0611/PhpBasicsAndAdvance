
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

// 1. $GLOBALS

// $GLOBALS : It is a superglobal variable which is used to access global variables from anywhere 
// in the PHP script. PHP stores all the global variables in array $GLOBALS[] where index holds the
//  global variable name, which can be accessed.

$x = 200;
$y = 300;
function multiplication(){
    $GLOBALS['z'] = $GLOBALS['x'] * $GLOBALS['y'];
}
multiplication();
echo $z;
echo "<br>";

?>