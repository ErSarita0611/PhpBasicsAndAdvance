<?php

// file_exists(): It is an inbuilt function that is used to check whether a file or directory exists or not.
// is_dir(): It is also used to check whether a file or directory exists or not.
// mkdir() :  This function creates a directory.


// Method 1: Using file_exists() function: The file_exists() function is used to check whether a 
// file or directory exists or not.

// Syntax:
// file_exists( $path )

// Checking whether file exists or not 
$file_path = '/user01/work/data.txt'; 
  
if (file_exists($file_path)) { 
    echo "The Given file already exists in GEEKSFORGEEKS directory"; 
} 
else { 
    echo "The file path doesn't exists in GeeksforGeeks directory"; 
}
echo "<br>";


// Method 2: Using is_dir() function: The is_dir() function is used to check whether the specified 
// file is a directory or not.

// Syntax:

// is_dir( $file )

$gfg_directory = "https://www.geeksforgeeks.org"; 
  
    
// Checking whether a file is directory or not 
if (is_dir($gfg_directory)) 
    echo ("Given $gfg_directory exists in GeeksforGeeks Portal"); 
else
    echo ("Given $gfg_directory doesn't exists in GeeksforGeeks Portal");

    echo "<br>";


// Method 3: Using mkdir() function: The mkdir() creates a new directory with the specified pathname.

// Syntax:

// mkdir(path, mode, recursive, context)

$file_path = '/user01/work/data1.txt'; 
  
// Checking whether file exists or not 
if (!file_exists($file_path)) { 
  
    // Create a new file or direcotry 
    mkdir($file_path, 0777, true); 
} 
else { 
    echo "The Given file path already exists"; 
} 

?>