<?php
// properly Format a Number
// 1: Using a for loop for string concatenation

$no_of_zeros = 5;
$number = 999;
print ("Original number : ");
print ($number."\n"."<br>");
for ($i=0; $i < $no_of_zeros; $i++) { 
    $number = '0'.$number;
}
print("Modified number");
print($number);
echo "<br>";

// 2: Conversion of integer to string
$num = "00000092939292";
echo "Original number \n";
echo $num."\n"."<br>";
echo "explicit casting.\n";
echo (int)$num;
echo "<br>";

// Using str_pad() method 

$len = 8;
$str = 2222;
echo("Original string \t");
echo ($str."<br>");
$new_str = str_pad($str, $len, "0", STR_PAD_LEFT);
echo ("Modify string \t");
echo $new_str;
echo "<br>";

// 4: Using format specifiers printf()/sprintf()


 #declaring the number
 $num = 86857658;
 print("Original Number : ");
 print($num."\n"."<br>");

 #specifying the number of zeros
 $num_of_zeros = 10;

 #defining the total length of the number of 
 #zeros and length of the number
 $length = $num_of_zeros + strlen($num) ;

 #defining the character to lead the number with
 $ch = 0;

 #specifying the type of number
 $num_type = 'd';

 #specifying the format 
 $format_specifier = "%{$ch}{$length}{$num_type}"; 

 # print and echo
 print("Modified Number : ");
 printf($format_specifier, $num);

?>