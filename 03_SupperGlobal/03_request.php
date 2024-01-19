<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- // Below is the list of superglobal variables available in PHP: 

// 1. $GLOBALS
// 2. $_SERVER
// 3. $_REQUEST
// 4. $_GET
// 5. $_POST
// 6. $_SESSION
// 7. $_COOKIE
// 8. $_FILES
// 9. $_ENV -->
    

<!-- // 3. $_REQUEST

// $_REQUEST : It is a superglobal variable which is used to collect the data after submitting a HTML form.
//  $_REQUEST is not used mostly, because $_POST and $_GET perform the same task and are widely used. -->

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
NAME: <input type="text" name="fname">
<button type="submit">SUBMIT</button>
</form>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_REQUEST['fname']);
    if (empty($name)) {
        echo "name is empty";
    }else{
        echo $name;
    }
    
}
?>

</body>
</html>