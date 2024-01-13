<?php

/*Parameters: The $get_as_float is sent as a parameter to the microtime() function, and it returns the 
string microsec by default.*/

/*Return Value: By default, the microtime() function returns the time as a string, but if it is set to
 TRUE, then the function returns the time as a string. So the default is FALSE.*/


 // Displaying the micro time as a string 

 echo ("Display the micro time as a string : ");
 echo (microtime());
 echo "<br>";

 // Displaying the micro time as a float type 
 echo ("Displaying the micro time as a float :");
 echo (microtime(true));
 echo "<br>";


 // use microtime() function to measure starting time 
 $time_start = microtime(true);

 // code of program
 $num = 0;
 for ($i = 0; $i < 100000000; $i += 1) { 
    $num += 5;
 }

 // Use microtime() function to measure endding time 
 $time_end = microtime(true);

 // time difference
 $time = $time_end - $time_start;
 echo "The speed of code = ".$time;
 echo "<br>";

 // current time in millisecond 
 $milliseconds = round(microtime(true) * 1000);
 echo $milliseconds;

?>