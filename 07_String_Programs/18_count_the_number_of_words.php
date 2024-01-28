<?php 

// count the number of words
/* 1: str_word_count() Method:
The str_word_count() method is used to counts the number of words in a string. */ 

$mystring = "Twinkle twinkl4e little star"; 
print_r(str_word_count($mystring));
echo "<br>";


$mystring = "Twinkle twinkl4e little star"; 
print_r(str_word_count($mystring, 1));
echo "<br>";


function get_num_of_words($string) { 
    $string = preg_replace('/\s+/', ' ', trim($string)); 
    $words = explode(" ", $string); 
    return count($words); 
} 

$str = "  Twinkle twinkl4e little star  ";  
  
// Function call  
$len = get_num_of_words($str); 
echo $len; 
echo "<br>";
 
    
// Function to count the words 
function get_num_of_words1($string) { 
    $str = trim($string); 
      while (substr_count($str, "  ") > 0) { 
        $str = str_replace("  ", " ", $str); 
    } 
      return substr_count($str, " ")+1; 
} 
  
$str = "  Twinkle twinkl4e little star  ";  
$len = get_num_of_words1($str); 
echo $len; 
echo "<br>";

$mystring = "Twinkle twinkl4e little star"; 
print_r(str_word_count($mystring, 2 ,4)); 

?>