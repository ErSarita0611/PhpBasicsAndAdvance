
<?php


// PHP program to check for Anagram

/* count_chars(): 
this function generally has syntax count_chars(string, return_mode) is use to perform 
several operations related to string. This parameter is optional. It takes value to 0, 1, 2, 3, 4. */ 

function is_anagram($string_1, $string_2) 
{ 
    if (count_chars($string_1, 1) == count_chars($string_2, 1)) 
        return 'yes'; 
    else
        return 'no';     
} 

// Driver code 
print_r(is_anagram('program', 'grampro')."\n"); 
print_r(is_anagram('card', 'cart')."\n");
?>