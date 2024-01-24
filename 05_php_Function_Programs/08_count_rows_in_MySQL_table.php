<?php

// count rows in MySQL table

$con = mysqli_connect("localhost","root","","phpfunction"); 
    $sql = "SELECT * from users"; 
  
    if ($result = mysqli_query($con, $sql)) { 
  
    $rowcount = mysqli_num_rows( $result ); 
      
    printf("Total rows in this table : %d\n", $rowcount); 
} 
  
mysqli_close($con); 

// another example

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
 $dbname = "phpfunction"; 
   
$conn = new mysqli($servername,  
    $username, $password, $dbname); 
   
$sql = "SELECT count(*) FROM users "; 
$result = $conn->query($sql); 
  
while($row = mysqli_fetch_array($result)) { 
    echo "Total Rows is ". $row['count(*)']; 
    echo "<br />"; 
} 
$conn->close();

?>