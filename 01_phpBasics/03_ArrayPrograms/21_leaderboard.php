<!DOCTYPE html>
<html lang="en">
<head> 
        <title>LeaderBoard Using PHP</title> 
    </head> 
  
    <body> 
        <h2>Welcome To GFG</h2> 
        <table border = "2"> 
            <tr> 
                <td>Ranking</td> 
                <td>UserName</td> 
                <td>Marks</td> 
            </tr>
 

<?php 

// How to make a leaderboard using PHP

/* Connection Variable ("Servername", 
"username","password","database") */
$con = mysqli_connect("localhost", 
		"root", "", "leaderboard"); 

/* Mysqli query to fetch rows 
in descending order of marks */
$result = mysqli_query($con, "SELECT userName, 
marks FROM leaderboard ORDER BY marks DESC"); 

/* First rank will be 1 and 
	second be 2 and so on */
$ranking = 1; 

/* Fetch Rows from the SQL query */
if (mysqli_num_rows($result)) { 
	while ($row = mysqli_fetch_array($result)) { 
		echo "<td>{$ranking}</td> 
		<td>{$row['userName']}</td> 
		<td>{$row['marks']}</td>"; 
		$ranking++; 
	} 
} 
?>       
</table>      
    
</body>
</html>
