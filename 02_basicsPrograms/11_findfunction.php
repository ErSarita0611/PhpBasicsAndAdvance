<?php


// getFileName: It returns the file location of the function.
// getNumberOfParameters: It returns the number of parameters passed to the function.
// getStartLine: It return the starting line of the function.

// $details = new ReflectionFunction('printing');
// print $details->getFileName() . ':' . $details->getStartLine();


// function printing()
// {
//     echo 'Welcome to GeeksforGeeks';
// }
 
// $details = new ReflectionFunction('printing');
// echo 'File location : '.$details->getFileName(). 
// ', Starting line : ' . $details->getStartLine().
// ', Parameters passed : '.$details->getNumberOfParameters();

function printing() {
    echo 'Welcome to GeeksforGeeks';
}
 
function geeks() {
    echo 'This is the article How to find out where 
         a function is defined using PHP?';
}
 
$details = new ReflectionFunction('geeks');
 
print 'File location :'.$details->getFileName().
' Starting line :' . $details->getStartLine().
' No. of parameters passed :'.$details->getNumberOfParameters();

?>