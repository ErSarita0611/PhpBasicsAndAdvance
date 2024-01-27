<?php

      //declaring multiple lines using the new line escape sequence 
      $var="Geeks\nFor\nGeeks"; 
      echo $var; 
      echo "<br>";

    $s1="Geeks". PHP_EOL;//PHP_EOL marks end of line so that 
    $s2="For". PHP_EOL;//next string get concatenated as new line 
    $s3="Geeks"; 
    $s1.=$s2.=$s3;//concatenating the string into $s1 
    echo $s1;//printing final concatenated string 
    echo "<br>";


?>