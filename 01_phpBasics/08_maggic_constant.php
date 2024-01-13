
<!-- Magic constants: Magic constants are the predefined constants in PHP which is used on the basis of their use.
 These constants are created by various extensions. 
 There are nine magic constant in the PHP and all of the constant resolved at the compile-time, 
 not like the regular constant which is resolved at run time.
 There are eight magic constants that start and end with double underscores (__).  -->

 <?php
//  1. __line__: This magic constant return the current line number of the file. 
//  If you use this magic constant in your program file somewhere then 
//  this constant will display the line number during compile time.
  
echo "The Line number is : ". __line__;
  

//  2. __file__: This magic constant return the full path of the executed file with the name of the file.
echo "The file name is : ". __file__;


//  3. __dir__: This magic constant return the directory of the executed file.
echo "The directory is : ". __dir__;


//  4. __function__: This magic constant return the name of the function where this magic constant is included.
function Geeks(){
    echo "The function name is : ". __function__;
}
Geeks();


//  5. __class__: This magic constant return the name of the class where this magic constant is included.
class Geeks
{
    public function getClassName(){
        return __class__;
    }
}
$obj = new Geeks();
echo $obj->getClassName();


//  6. __method__: This magic constant return the method name where this magic constant is included.
class Company
{
    public function GeeksforGeeks(){
        return __method__;
    }
}
$object = new Company();
echo  $object->GeeksforGeeks();



//  7. __namespace__: This magic constant return the current namespace where this magic constant is included.
// namespace GeeksforGeeks;
 
class Company {
    public function gfg() {
        return __namespace__;
    }
}
 
$object1 = new Company();
echo  $object1->gfg(); 


//  8. __trait__: This magic constant return the trait name where this magic constant is included.
trait GeeksforGeeks{  
    function gfg(){  
        echo __trait__;  
        }  
    }  
    class Company{  
        use GeeksforGeeks;  
        }  
    $a = new Company;  
    $a->gfg();  



//  9. ClassName::class: This magic constant return the fully qualified class name.
// namespace Computer_Sciecnec_Portal;
class Geeks{ }
 
echo Geeks::class;//Classname::class
 ?>