<!-- In PHP, variables can be declared anywhere in the script.

The scope of a variable is the part of the script where the variable can be referenced/used.

PHP has three different variable scopes: -->

<?php

$x = 5; // global scope

function globalFunction()
{
    echo "<p> variable x is inside function is : $x</p>";

}

globalFunction();

echo "<p> variable x outside function is : $x</p>";



// Global Keyword

$a = 10;
$b = 20;
 Function keyword(){
    global $a, $b;
    $b = $a +$b;
 }

 keyword();
 echo $b;
 echo "<br>";


//  PHP also stores all global variables in an array called $GLOBALS[index]. 
//  The index holds the name of the variable. This array is also accessible from within
//   functions and can be used to update global variables directly.

function myTest(){
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}

myTest();

echo $b;
echo "<br>";


// Static Keyword

function myTest2(){
    static $xx = 0;
    echo $xx;
    $xx++;
}

myTest2();
echo "<br>";
myTest2();
echo "<br>";
myTest2();

?>