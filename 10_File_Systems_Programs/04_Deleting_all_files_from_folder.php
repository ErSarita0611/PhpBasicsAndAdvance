<!-- <?php

// Deleting all files from a folder

// Approach 1:

// Generate a list of files using glob() method
// Iterate over the list of files.
// Check whether the name of files is valid.
// Delete the file using unlink() method.


// PHP program to delete all 
// file from a folder 
   
// Folder path to be flushed 
$folder_path = "mydata"; 
   
// List of name of files inside 
// specified folder 
$files = glob($folder_path.'/*');  
   
// Deleting all the files in the list 
foreach($files as $file) { 
   
    if(is_file($file))  
    
        // Delete the given file 
        unlink($file);  
}


// Approach 2:

// Generate a list of files using glob() method.
// Filter the list using array_filter() or array_merge() methods.
// Map the list to unlink() method using array_map() method.

// PHP program to delete all files from a folder 
  
// Deleting all the files inside the given folder 
array_map('unlink', array_filter( 
    (array) array_merge(glob("myGeeks/*")))); 


//     Approach 3:

// Generate list of files using DirectoryIterator.
// Iterate over the list of files.
// Validate the file while checking if the file directory has a dot or not.
// Using the getPathName method reference, delete the file using unlink() method.

// PHP program to delete all files 
// from a folder 
  
// Folder path to be flushed 
$folder_path = 'myGeeks/'; 
  
// Assigning files inside the directory 
$dir = new DirectoryIterator(dirname($folder_path)); 
  
// Deleting all the files in the list 
foreach ($dir as $fileinfo) { 
      
    if (!$fileinfo->isDot()) { 
  
        // Delete the given file 
        unlink($fileinfo->getPathname()); 
    } 
} 



// // Folder path to be flushed 
// $dir = "myGeeks/"; 
   
// // Assigning files inside the directory 
// $dir = new RecursiveDirectoryIterator( 
//     $dir, FilesystemIterator::SKIP_DOTS); 
   
// // Reducing file search to given root 
// // directory only 
// $dir = new RecursiveIteratorIterator( 
//     $dir,RecursiveIteratorIterator::CHILD_FIRST); 
   
// // Removing directories and files inside 
// // the specified folder 
// foreach ( $dir as $file ) {  
//     $file->isDir() ?  rmdir($file) : unlink($file); 
// }


?> -->