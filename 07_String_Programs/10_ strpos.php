<?php
// check if a String Contains a Substring
// A string is a collection of given characters and a substring is a string present in a given string.

//input string 
$input_string = "sravan kumar author at geeks for geeks "; 
  
//sub string to be checked 
$sub = "geeks"; 
  
// Test if string contains the word 
if (strpos($input_string, $sub) !== false) 
{ 
    echo "True"; 
} 
else
{ 
    echo "False"; 
}
echo "<br>"; 

// Example 2:

$input_string = "sravan kumar author at geeks for geeks "; 
  
//sub string to be checked 
$sub = "computer"; 
  
// Test if string contains the word 
if (strpos($input_string, $sub) !== false) 
{ 
    echo "True"; 
} 
else
{ 
    echo "False"; 
}
echo "<br>"; 

// Example 3: The following example also considers space.

$input_string = "geeks for geeks java python php"; 
  
//sub string to be checked 
$sub = " "; 
  
// Test if string contains the word 
if (strpos($input_string, $sub) !== false) 
{ 
    echo "True"; 
} 
else
{ 
    echo "False"; 
} 
echo "<br>"; 

// Example 4:

$input_string = "geeks for geeks java python php"; 
  
//sub string to be checked 
$sub = " dbms"; 
  
// Test if string contains the word 
if (strpos($input_string, $sub) !== false) 
{ 
    echo "True"; 
} 
else
{ 
    echo "False"; 
}

?>