<?php
// How to sort an Array of Associative Arrays by Value of a Given Key

/* array_multisort() method is used to return a sorted array. String keys will be maintained,
but the numeric keys are re-indexed, and they start at 0 and increase by 1. This function can
sort multiple arrays at once or a multidimensional array.*/

#declaring an associative array
$arr = array(
    array("Name"=>"YASHIKA", "marks"=>22),
    array("Name"=>"ASHIKA", "marks"=>67),
    array("Name"=>"BASHIKA", "marks"=>87),
    array("Name"=>"YASHITA", "marks"=>24),
    array("Name"=>"AMAN", "marks"=>55),
    array("Name"=>"ANjali", "marks"=>98),
    array("Name"=>"YASHIKA", "marks"=>100),   
 );
 #declaring an array to store names
 $names = array();
 #iterating over the arr
 foreach ($arr as $key => $val)
 {
   #storing the key of the names array as the Name key of the arr
     $names[$key] = $val['Name'];
      
 }
 #apply multisort method
 array_multisort($names, SORT_ASC, $arr);
 print_r("Modified Array : ");
 print_r($arr); 
 echo "<br>";


/* 2: Using the usort() method

This method sorts the given array using a user-defined comparison function. 
The user-defined function should return an integer <, =, or > than 0 if the first argument
is <, =, or > than the second argument. This method assigns new keys to the elements in the array. 
It just removes any existing keys that may have been assigned, rather than just simply reordering
the keys.*/

#sort in descending order
function DescSort($val1,$val2)
{
  #check if both the values are equal
    if ($val1['marks'] == $val2['marks']) return 0;
  #check if not equal, then compare values
    return ($val1['marks'] < $val2['marks']) ? 1 : -1;
}
#declaring an associative array
$arr = array(
   array("Name"=>"YASHIKA", "marks"=>22),
   array("Name"=>"ASHIKA", "marks"=>67),
   array("Name"=>"BASHIKA", "marks"=>87),
   array("Name"=>"YASHITA", "marks"=>24),
   array("Name"=>"AMAN", "marks"=>55),
   array("Name"=>"ANjali", "marks"=>98),
   array("Name"=>"YASHIKA", "marks"=>100),   
);
#apply usort method on the array
usort($arr,'DescSort');
print_r("Modified Array : ");
print_r($arr);
echo "<br>";


/* 3: Using the arsort() function

The arsort() in PHP is used to sort an array according to values. It sorts in a way that 
the relationship between indices and values is maintained. By default it sorts in descending 
order of values.*/

# Declaring an associative array
$arr = array(
    array("Name"=>"YASHIKA", "marks"=>22),
    array("Name"=>"ASHIKA", "marks"=>67),
    array("Name"=>"BASHIKA", "marks"=>87),
    array("Name"=>"YASHITA", "marks"=>24),
    array("Name"=>"AMAN", "marks"=>55),
    array("Name"=>"ANjali", "marks"=>98),
    array("Name"=>"YASHIKA", "marks"=>100),   
 );
  
 # Declaring an array to store marks
 $marks = array();
  
 # Iterating over the arr
 foreach ($arr as $key => $val)
 {
   # Storing the key of the marks array as
   # the marks key of the arr
     $marks[$key] = $val['marks'];
        
 }
 # Apply arsort method on the array
 arsort($marks);
 print_r("Modified Array : ");
 print_r($marks);

?>