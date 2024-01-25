<?php

// delete text from file using preg_replace() function
// preg_replace() function is searches the string pattern in the file and if string pattern found
// then it replace with the required string.

// 1: This program removes all the strings from the given file.
$a = 'fruits.txt';
$b = file_get_contents('fruits.txt');
echo "File contents before using ". "pre_replace() function<br>";
echo $b;
echo "<br><br> file contents after using " . "preg_replace() function<br>";
$c = preg_replace('/[a-z]/', '', $b);
echo $c;
file_put_contents($a, $c);
echo "<br>";


// 2: This program deletes a specific content from the file using preg_replace() function.
$ab = 'fruits.txt'; 
   
$bc = file_get_contents('fruits.txt'); 
  
echo "File contents before using " . "preg_replace() function<br>"; 
echo $bc; 
  
echo "<br><br>File contents after using " . "preg_replace() function<br>"; 
  
$cd = preg_replace('/[a]/', '', $bc); 
echo $cd; 
  
file_put_contents($ab, $cd); 


// 3: This program deletes the entire word from the file.

$a = 'fruits.txt'; 
   
$b = file_get_contents('fruits.txt'); 
  
echo "File contents before using "
        . "preg_replace() function<br>"; 
echo $b; 
  
echo "<br><br>File contents after using "
        . "preg_replace() function<br>"; 
  
$c = preg_replace('/apple/', '', $b); 
echo $c; 
  
file_put_contents($a, $c); 

?>