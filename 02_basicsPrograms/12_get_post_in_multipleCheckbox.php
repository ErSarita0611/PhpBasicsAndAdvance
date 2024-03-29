<?php 

// Get the value of name field 
// from $_POST array 
$name = $_POST['name']; 

// Get the value of contact field 
// from $_POST array 
$contact = $_POST['contact']; 

// Get the value of email field 
// from $_POST array 
$email = $_POST['email']; 

// Check if at least one skill has been checked, if 
// checked, then assign the array returned by 
// $_POST['skills'] to $skills variable otherwise 
// assign an empty array 
$skills = (isset($_POST['skills'])) ? $_POST['skills'] : array(); 

?> 

<h2>Confirmation</h2> 
<p><strong>Name :</strong> <?php echo $name; ?></p> 
<p><strong>Email :</strong> <?php echo $email; ?></p> 
<p><strong>Contact :</strong> <?php echo $contact; ?></p> 
<p><strong>Skills :</strong> 
<?php 

// Check if $skills array has at least one 
// element, if so, then iterate through 
// each element and echo its value, otherwise 
// echo that no skill is selected 
if (count($skills) > 0) { 
	foreach ($skills as $skill) { 
		echo $skill .' '; 
	} 
} else { 
	echo "No skill has been selected"; 
} 
?> 
</p> 



<!DOCTYPE html> 
<html> 

<head> 
	<title> 
		How to Get $_POST from 
		multiple checkboxes? 
	</title> 
</head> 

<body> 
	<form action="" method="post"> 
		<div> 
			<label>Name :</label> 
			<input type="text" name="name"> 
		</div> 
		
		<div> 
			<label>Email :</label> 
			<input type="email" name="email"> 
		</div> 
		
		<div> 
			<label>Skills :</label> 
			<input type="checkbox" name="skills[]"
						value="Java"> Java 
			
			<input type="checkbox" name="skills[]"
						value="Php"> PHP 
			
			<input type="checkbox" name="skills[]"
						value="Python"> Python 
			
			<input type="checkbox" name="skills[]"
						value="JavaScript"> JavaScript 
		</div> 
		
		<div> 
			<label>Contact :</label> 
			<input type="number" name="contact"> 
		</div> 
		
		<div> 
			<button type="submit">Submit</button> 
		</div> 
	</form> 
</body> 

</html> 
