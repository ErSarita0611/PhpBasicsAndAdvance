<?php

// Abstract Classes

abstract class base{
    // This is abstract function 
    abstract function printdata();
    // This is not abstract function 
    function pr() {
        echo "Base class";
    }
}


abstract class Base1 { 
    // This is abstract function 
    abstract function printdata(); 
} 
class Derived extends base1 { 
    function printdata() { 
        echo "Derived class"; 
    } 
} 
  
// Uncommenting the following line will  
// cause compiler error as the line tries 
// to create an instance of abstract class.  
// $b = new Base();  
      
$b1 = new Derived; 
$b1->printdata();


// Example: 3

abstract class Baseabstract{
    function __construct(){
        echo "this is abstract  class constructor";
    }

    // this is abstract function
    abstract function printdata1();
}
class NewDerived extends baseabstract{
    function __construct(){
        echo "<br> Derive class constructor";
    }
    function printdata1(){
        echo "<br> Derived class printdata function";
    }
}
$b1 = new NewDerived;
$b1->printdata1;
echo "<br>";

?>