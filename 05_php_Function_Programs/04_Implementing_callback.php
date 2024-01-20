<?php

// Implementing callback
/* Standard callback: 
In PHP, functions can be called using call_user_func() function where arguments is the 
string name of the function to be called. */

function someFunction() {
    echo "Hello World <br>";
}
call_user_func('someFunction');


// PHP program to illustrate working 
// of a Static class method callback 

class GFG { 
  
    // Function used to print a string 
    static function someFunction() { 
        echo "Parent Geeksforgeeks <br>"; 
    } 
} 
  
class Article extends GFG { 
  
    // Function to print a string 
    static function someFunction() { 
        echo "Geeksforgeeks Article <br>"; 
    }    
} 
  
// Static class method callback 
call_user_func(array('Article', 'someFunction')); 
  
call_user_func('Article::someFunction'); 
  
// Relative Static class method callback 
call_user_func(array('Article', 'parent::someFunction'));


// call_user_func() function is the object variable itself.

class sarita{
    static function someFunction() {
        echo "Hello World <br>";
    }
    public function __invoke() {
        echo "invike is here";
    }
}

$obj = new sarita();
call_user_func(array($obj, 'someFunction'));
call_user_func($obj);
echo "<br>";


// PHP program to illustrate working 
// of a closure callback 
  
// Closure to print a string 
$print_function = function($string) { 
    echo $string."\n"; 
}; 
  
// Array of strings 
$string_array = array("Geeksforgeeks", "GFG", "Article"); 
  
// Callable closure 
array_map($print_function, $string_array);

?>