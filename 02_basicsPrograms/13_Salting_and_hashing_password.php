<?php

// Salting and hashing: In PHP, storing the password by salting and hashing is done by the password_hash() method. 
// This method takes three parameters and returns a final hash of that password.



// Syntax:

// string password_hash( string $pass, int $algo, array $options )


// Store the string into variable
$password = 'password';

// use password_has() function to create a password hash
$hash_default_salt = password_hash($password, PASSWORD_DEFAULT);
$hash_variable_salt = password_hash($password, PASSWORD_DEFAULT, array('cost' => 9));

// use password verity() function to verify the password matches
echo password_verify('password', $hash_default_salt ) . "<br>";
echo password_verify('password', $hash_variable_salt ) . "<br>";
echo password_verify('password123', $hash_default_salt );


?>