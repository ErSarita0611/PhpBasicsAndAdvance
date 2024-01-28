<?php

// get a substring between two strings

function string_between_two_string($str, $starting_word, $ending_word)
{
    $subtring_start = strpos($str, $starting_word);
    $subtring_start += strlen($starting_word);
    $size = strpos($str, $ending_word, $subtring_start) - $subtring_start;
    return substr($str, $subtring_start, $size);  
}
 
$str = 'Hey, Welcome to the World';
$substring = string_between_two_string($str, 'Welcome', 'for');
 
echo $substring;
echo "<br>";



/* 2: explode() function. 
The explode function splits the given string on the basis of the parameter provided i.e. the separator. */ 

function string_between_two_string1($str, $starting_word, $ending_word){
    $arr = explode($starting_word, $str);
    if (isset($arr[1])){
        $arr = explode($ending_word, $arr[1]);
        return $arr[0];
    }
    return '';
  }
 
  $str = "Hey, how are you?";
  $start = "Hey";
  $end = "you";
  $substring = string_between_two_string1($str, $start, $end);
  echo $substring;
?>