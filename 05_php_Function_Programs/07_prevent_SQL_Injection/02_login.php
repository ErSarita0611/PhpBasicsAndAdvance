<?php 

include '01_dbconnection.php'; 
$userid = $_POST['userid']; 
$password = $_POST['password']; 

$sanitized_userid = 
	mysqli_real_escape_string($db, $userid); 
	
$sanitized_password = 
	mysqli_real_escape_string($db, $password); 
	
$sql = "SELECT * FROM users WHERE username = '"
	. $sanitized_userid . "' AND password = '"
	. $sanitized_password . "'"; 
	
$result = mysqli_query($db, $sql) 
	or die(mysqli_error($db)); 
	
$num = mysqli_fetch_array($result); 
	
if($num > 0) { 
	echo "Login Success"; 
} 
else { 
	echo "Wrong User id or password"; 
} 

?> 




<!DOCTYPE html> 
<html> 

<head> 
	<title>GFG SQL Injection Article</title> 
	<link rel="stylesheet" type="text/css"
		href="style.css"> 
</head> 

<body> 
	<div id="form"> 
		<h1>LOGIN FOR SQL INJECTION</h1> 
		<form name="form"
			action="02_login.php" method="POST"> 

			<p> 
				<label> USER NAME: </label> 
				<input type="text" id="user"
					name="userid" /> 
			</p> 

			<p> 
				<label> PASSWORD: </label> 
				<input type="text" id="pass"
					name="password" /> 
			</p> 

			<p> 
				<input type="submit"
					id="button" value="Login" /> 
			</p> 
		</form> 
	</div> 
</body> 

</html> 
