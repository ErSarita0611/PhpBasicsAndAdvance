<?php

// format Phone Numbers
// creating a formatting function

function formatting($phone){ 
      
    // Pass phone number in preg_match function 
    if(preg_match( 
        '/^\+[0-9]([0-9]{3})([0-9]{3})([0-9]{4})$/',  
    $phone, $value)) { 
      
        // Store value in format variable 
        $format = $value[1] . '-' .  
            $value[2] . '-' . $value[3]; 
    } 
    else { 
         
        // If given number is invalid 
        echo "Invalid phone number \n"; 
    } 
      
    // Print the given format 
    echo("$format" . "\n"); 
} 
   
// Call the function 
formatting("+02025550170"); 
  
formatting("+01677942758"); 
?>