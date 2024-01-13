<?php include('02_server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Login and Registration
		System - LAMP Stack
	</title>
	
	<link rel="stylesheet" type="text/css"
			href="style.css">
</head>
<body>
	<div class="header">
		<h2>Login Here!</h2>
	</div>
	
	<form method="post" action="03_login.php">

		<?php include('01_error.php'); ?>

		<div class="input-group">
			<label>Enter Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Enter Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn"
						name="login_user">
				Login
			</button>
		</div>
		


<p>
			New Here? 
			<a href="04_register.php">
				Click here to register!
			</a>
		</p>



	</form>
</body>

</html>
