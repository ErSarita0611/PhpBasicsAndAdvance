<?php

// Constructors and Destructors

// function __construct()
    //    {
       // initialize the object and its properties by assigning 
       //values
    //    }
    // Constructor types: 

/* 1. Default Constructor:
It has no parameters, but the values to the default constructor can be passed dynamically.
2. Parameterized Constructor: 
It takes the parameters, and also you can pass different values to the data members.
3. Copy Constructor: 
It accepts the address of the other objects as a parameter. */

/* Inheritance: 
As Inheritance is an object-oriented concept, the Constructors are inherited from parent class 
to child class derived from it. Whenever the child class has constructor and destructor of their own, 
these are called in order of priority or preference. */


// Pre-defined Default Constructor: 
// By using function __construct(), you can define a constructor.
// Note: In the case of Pre-defined Constructor(__construct) and user-defined constructor in the same 
// class, the Pre-defined Constructor becomes Constructor while user-defined constructor becomes the 
// normal method.

class Tree{
    function Tree(){
        echo "Its a User define constroctor of the class tree";
    }
    function __construct(){
        echo "Its a pre-define constructor of the class tree";
    }
}
$obj = new Tree();

echo "<br>";


// Parameterized Constructor: The constructor of the class accepts arguments or parameters. 
// The -> operator is used to set value for the variables. In the constructor method, 
// you can assign values to the variables during object creation.

class Employee{
    public $name;
    public $position;
    function __construct($name,$position){
        // This is initializing the class properties
        $this->name=$name;
        $this->position=$position;
    }
    function show_details(){
        echo $this->name. " : ";
        echo "Your Position is " . $this->position."<br>";
    }
}
$employee_obj = new Employee("Sarita", "Developer");
$employee_obj->show_details();

$employee2 = new Employee("Sandhya", "Software Developer");
$employee2->show_details(); 
echo "<br>";



// Advantages of using Constructors: 
// Constructors provides the ability to pass parameters which are helpful in automatic initialization 
// of the member variables during creation time .
// The Constructors can have as many parameters as required and they can be defined with the default 
// arguments.
// They encourage re-usability avoiding re-initializing whenever instance of the class is created .
// You can start session in constructor method so that you don’t have to start in all the functions 
// everytime.
// They can call class member methods and functions.
// They can call other Constructors even from Parent class.

// Note : The __construct() method always have the public visibility factor. 

class Parentclass{
    function __construct(){
        print "Parent class constructor. <br>";
    }
}
class ChildClass extends Parentclass
    {
        function __construct()
        {
            parent::__construct();
            print "Child Class constructor";
        }
    }
$obj = new Parentclass();
$obj = new ChildClass();
echo "<br>";


// Destructor: 
// Destructor is also a special member function which is exactly the reverse of constructor method
// and is called when an instance of the class is deleted from the memory. Destructors 
// (__destruct ( void): void) are methods which are called when there is no reference to any object 
// of the class or goes out of scope or about to release explicitly. 

// __destruct(): 
 
// function __destruct() 
    //    {
       // destroying the object or clean up resources here 
    //    }


    // Note: The destructor method is called when the PHP code is executed completely by its last 
    // line by using PHP exit() or die() functions.

    class someClass{
        function __construct(){
            echo "In Constructor, ";
            $this->name = "Class object! ";
        }

        function __destruct(){
            echo "destroying " . $this->name . "<br>";
        }

    }
    $obj = new someClass();


    // Advantages of destructors: 
// Destructors give chance to objects to free up memory allocation , so that enough space is available
// for new objects or free up resources for other tasks.
// It effectively makes programs run more efficiently and are very useful as they carry out clean up tasks.

?>