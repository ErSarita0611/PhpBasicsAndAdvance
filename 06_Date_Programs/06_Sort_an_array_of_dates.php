<?php
// PHP program to sort array of dates  

// strtotime() : This function changes a given date string into timestamp (large int value).
// usort() : This function sorts the given array as per a user defined comparison function.
  
// user-defined comparison function  based on timestamp  
function compareByTimeStamp($time1, $time2)
{
    if (strtotime($time1) < strtotime($time2)) 
        return 1; 
    else if (strtotime($time1) > strtotime($time2))  
        return -1; 
    else
        return 0; 
}
$arr = array("2024-09-12", "2023-10-13", "2024-20-12");
// sort array with given user-defined function 
usort($arr, "CompareByTimeStamp");
print_r($arr);

echo "<br>";


?>