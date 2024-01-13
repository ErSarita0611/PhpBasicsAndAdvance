<!-- // PHP supports the following data types:

1. The predefined data types are:
Boolean
Integer
Double
String


2. The user-defined (compound) data types are:
Array
Objects


3. The special data types are:
NULL
resource

-->

<?php

// 1. Integer

//  An integer must have at least one digit
// An integer must not have a decimal point
// An integer can be either positive or negative
// Integers can be specified in: decimal (base 10), hexadecimal (base 16), 
// octal (base 8), or binary (base 2) notation 


// decimal base integers
$deci1 = 50; 
$deci2 = 654; 

// octal base integers
$octal1 = 07; 

// hexadecimal base integers
$octal = 0x45; 

$sum1 = $deci1 + $deci2;
echo $sum1;
echo "\n\n";

//returns data type and value
var_dump($sum1);
echo "<br>";


// 2. Double

// Double: Can hold numbers containing fractional or decimal parts including positive 
// and negative numbers or a number in exponential form. 

$val1 = 50.85; 
$val2 = 654.26; 
 
$sum2 = $val1 + $val2;
 
echo $sum2;
echo "\n\n";
 
//returns data type and value
var_dump($sum2);
echo  "<br>";



// 3. String

// String: Hold letters or any alphabets, even numbers are included.
//  These are written within double quotes during declaration. 
//  The strings can also be written within single quotes, 
// but they will be treated differently while printing variables.

$name = "sarita";
echo "The name of the Geek is $name \n";
echo  "<br>";
echo 'The name of the geek is $name ';
echo  "<br>";
//returns data type, size and value
var_dump($name);
echo  "<br>";


// 4. Boolean

// A Boolean represents two possible states: TRUE or FALSE.
// NULL type values are also treated as false in Boolean. Apart from NULL, 
// 0 is also considered false in boolean.
//  If a string is empty then it is also considered false in boolean data type.

if(TRUE)
    echo "This condition is TRUE";
if(FALSE)
    echo "This condition is not TRUE";
    echo  "<br>";


// user-defined

// 5. Array
// Array is a compound data type that can store multiple values of the same data type.
// An array stores multiple values in one single variable.

$intArray = array( 10, 20 , 30);
 
echo "First Element: $intArray[0]";
echo  "<br>";
echo "Second Element: $intArray[1]";
echo  "<br>";
echo "Third Element: $intArray[2]";
echo  "<br>";
 
//returns data type and value
var_dump($intArray);
echo  "<br>";


// 6. Objects:
// Objects are defined as instances of user-defined classes that can hold both 
// values and functions and information for data processing specific to the class. 
// When the objects are created, they inherit all the properties and behaviours from the class,
// having different values for all the properties.

class gfg {
    var $message;
     
    function gfg($message) {
      $this->message = $message;
    }
     
    function msg() {
      return "This is an example of " . $this->message . "!";
    }
  }
   
  // instantiating a object
  $newObj = new gfg("Object Data Type");
  echo $newObj -> msg();
  echo  "<br>";


//  7. NULL:
// These are special types of variables that can hold only one value i.e.,
//  NULL. We follow the convention of writing it in capital form, but it’s case-sensitive.
//   If a variable is created without a value or no value,
//  it is automatically assigned a value of NULL.

$nm = NULL;
echo $nm;    // this will return no output
 
// return data type
var_dump($nm);

// 8. Resources:
// Resources in PHP are not an exact data type. These are basically used to store references
// to some function call or to external PHP resources.

?>