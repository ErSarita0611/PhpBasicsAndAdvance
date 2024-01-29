<?php

// PHP | Access Specifiers

/* 1. Public:
Public properties can be accessed by any code, whether that code is inside or outside the class. 
If a property is declared public, its value can be read or changed from anywhere in your script. */

class publicfunction{
    public $x = 100; 
    public $y = 50;

    function add(){
        echo $a = $this->x +$this->y;
        echo " ";
    }

}
class child extends publicfunction{
    function sub(){
        echo $s = $this->x - $this->y;
    }
}
$obj = new child;
// It will return the addition result
$obj->add();
// It's a derived class of the main class, which has a public object and therefore can be
// accessed, returning the subtracted result.
$obj->sub();
echo "<br>";



/* 2. Private: 
Private properties of a class can be accessed only by code inside the class. So if we create a 
property that’s declared private, only methods and objects inside the same class can access its contents.*/ 


class privatefunction
{  
private $a = 75 ;  # private attributes
private $b = 5 ;  
    private function div()  # private member function
{  
echo $d = $this->a / $this->b ; 
echo " ";
}  
    }     
// class child extends privatefunction 
// {  
// function mul()  
// {  
// echo $m = $this->a * $this->b ;  
// }  
   
// }    
 
// $obj= new child;  
 
// It's supposed to return the division result but since the data and function are private
// they can't be accessed by a derived class which will lead to fatal error .
// $obj->div(); 
 
// It's a derived class of the main class, which's accessing the private data 
// which again will lead to fatal error .
// $obj->mul();
echo "<br>";


/* 3. Protected: 
Protected class properties are a bit like private properties in that they can’t be accessed by code 
outside the class, but there’s one little difference in any class that inherits from the class i.e. 
base class can also access the properties. */


class protectedfunction
{ 
protected $x = 1000 ; # protected attributes
protected $y = 100 ; 
    function div() 
{ 
echo $d = $this->x / $this->y ; 
echo " ";
} 
    }     
class child1 extends protectedfunction 
{ 
function sub() 
{ 
echo $s = $this->x - $this->y ; 
} 
 
} 
class derived # Outside Class
{ 
function mul()
{
echo $m = $this->x * $this->y ;
}
     
}
$obj= new child1; 
 
// It will return the division result
$obj->div();
 
// Since it's a derived class of the main class,
$obj->sub();
 
// Since it's an outside class, therefore it will produce a fatal error .
// $obj->mul();



?>