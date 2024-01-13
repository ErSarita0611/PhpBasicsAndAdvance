<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
 <label for="name">Please enter your name: </label>
 <input name="name" type="text"><br>
 <label for="age">Please enter your age: </label>
 <input name="age" type="text"><br>
 <input type="submit" value="Submit">
 <button type="submit">SUBMIT</button>
</form>

<?php


// Below is the list of superglobal variables available in PHP: 

// 1. $GLOBALS
// 2. $_SERVER
// 3. $_REQUEST
// 4. $_GET
// 5. $_POST
// 6. $_SESSION
// 7. $_COOKIE
// 8. $_FILES
// 9. $_ENV


// 5. $_POST

/*$_POST : It is a super global variable used to collect data from the HTML form after submitting it.
  When form uses method post to transfer data, the data is not visible in the query string,
  because of which security levels are maintained in this method.*/


$nm=$_POST['name'];
$age=$_POST['age'];
echo "<strong>".$nm." is $age years old.</strong>";

?>

    
</body>
</html>