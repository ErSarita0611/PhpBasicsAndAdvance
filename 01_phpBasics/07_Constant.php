<?php

// Constant

// Constants are either identifiers or simple names that can be assigned any fixed values. 
// They are similar to a variable except that they can never be changed. 
// They remain constant throughout the program and cannot be altered during execution.
//  Once a constant is defined, it cannot be undefined or redefined. 
//  Constant identifiers should be written in upper case following the convention.
//  By default, a constant is always case-sensitive, unless mentioned.

// This creates a case-sensitive constant 
define("WELCOME", "sarita"); 
echo WELCOME, "\n"; 
  
// This creates a case-insensitive constant 
// define("HELLO", "sarita", true); 
// echo hello;
  
function testGlobal() { 
    echo WELCOME; 
} 
   
testGlobal(); 

 ?>