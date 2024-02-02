<?php

// How to check if File Exists

// Syntax:

// file_exists( $path )


$filename = "file1.php"; 
  
if (file_exists($filename)) { 
    echo "File exist."; 
} else { 
    echo "File does not exist."; 
} 
?>