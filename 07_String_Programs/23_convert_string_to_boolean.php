<?php

// convert string to boolean
// The below statement returns the boolean value true 
var_dump(filter_var('true', FILTER_VALIDATE_BOOLEAN)); 
var_dump(filter_var('1', FILTER_VALIDATE_BOOLEAN)); 
var_dump(filter_var('on', FILTER_VALIDATE_BOOLEAN)); 
var_dump(filter_var('yes', FILTER_VALIDATE_BOOLEAN)); 
  
// The below statement returns the boolean value false 
var_dump(filter_var('false', FILTER_VALIDATE_BOOLEAN)); 
var_dump(filter_var('0', FILTER_VALIDATE_BOOLEAN)); 
var_dump(filter_var('off', FILTER_VALIDATE_BOOLEAN)); 
var_dump(filter_var('no', FILTER_VALIDATE_BOOLEAN)); 
var_dump(filter_var('', FILTER_VALIDATE_BOOLEAN));

echo "<br>";

// Example: 1;
$str = "<h1>GeeksforGeeks!</h1>"; 
$newstr = filter_var($str, FILTER_SANITIZE_STRING); 
echo $newstr;
echo "<br>";


// Example: 2;
$int = 200; 
  
if (filter_var($int, FILTER_VALIDATE_INT) === 0 ||  
    !filter_var($int, FILTER_VALIDATE_INT) === false)  
{ 
    echo("Integer is valid"); 
}  
else 
{ 
    echo("Integer is not valid"); 
} 

echo "<br>";


// Example: 3;
$ip = "129.0.0.1"; 
  
if (!filter_var($ip, FILTER_VALIDATE_IP) === false) { 
    echo("$ip is a valid IP address"); 
} else { 
    echo("$ip is not a valid IP address"); 
} 
echo "<br>";


// Example: 4;
$email = "sarita@example.com"; 
  
// Remove all illegal characters from email 
$email = filter_var($email, FILTER_SANITIZE_EMAIL); 
  
// Validate e-mail 
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) { 
    echo("$email is a valid email address"); 
} else { 
    echo("$email is not a valid email address"); 
} 
echo "<br>";


// Example: 5;
$url = "https://www.geeksforgeeks.org"; 
  
// Remove all illegal characters from a url 
$url = filter_var($url, FILTER_SANITIZE_URL); 
  
// Validate url 
if (!filter_var($url, FILTER_VALIDATE_URL) === false) { 
    echo("$url is a valid URL"); 
} else { 
    echo("$url is not a valid URL"); 
} 

?>