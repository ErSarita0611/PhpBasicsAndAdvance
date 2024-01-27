<?php

// Encrypt and Decrypt 

/* Encryption and Decryption of a string is possible using one of the Cryptography 
Extensions called OpenSSL function for encrypt and decrypt. openssl_encrypt() Function: 
The openssl_encrypt() function is used to encrypt the data. */

// Store a string into the variable which need to be Encrypted

$simple_string = "Wlcome sarita kumari <br>";
// Display the original string 
echo "Original string: " . $simple_string;
$ciphering = "AES-128-CTR";
// Use OpenSSl Encryption method
$iv_lenght = openssl_cipher_iv_length($ciphering);
$option = 0;
// Non-NULL Initialization Vector for encryption
$encryption_iv = '1234567891011121';
// Store the encryption key
$encription_key = "sarita";
// Use openssl_encrypt() function to encrypt the data
$decryption = openssl_encrypt($simple_string, $ciphering, $encription_key, $option, $encryption_iv);
echo "Encrypted String: " . $decryption . "<br>";
$dencryption_iv = '1234567891011121';
// Store the decryption key
$dencription_key = "sarita";
// Use openssl_decrypt() function to decrypt the data
$decryption = openssl_decrypt($decryption, $ciphering, $dencription_key, $option, $dencryption_iv);
echo "Decrypted String: " . $decryption;


/* Example 2: illustrate the encryption and decryption of string. Here string to be
encrypted and decrypted string will be same but the encrypted string is randomly changed respectively. */


// Store a string into the variable which needs to be encrypted
$simple_string = "Welcome to GeeksforGeeks";
 
// Display the original string
echo "Original String: " . $simple_string . "\n";
 
// Store cipher method
$ciphering = "BF-CBC";
 
// Use OpenSSL encryption method
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;
 
// Use random_bytes() function to generate a random initialization vector (iv)
$encryption_iv = random_bytes($iv_length);
 
// Alternatively, you can use a fixed iv if needed $encryption_iv = openssl_random_pseudo_bytes($iv_length);    
// Use php_uname() as the encryption key
$encryption_key = openssl_digest(php_uname(), 'MD5', TRUE);
 
// Encryption process
$encryption = openssl_encrypt($simple_string, $ciphering,
    $encryption_key, $options, $encryption_iv);
 
// Display the encrypted string
echo "Encrypted String: " . $encryption . "\n";
 
// Decryption process
$decryption = openssl_decrypt($encryption, $ciphering,
    $encryption_key, $options, $encryption_iv);
 
// Display the decrypted string
echo "Decrypted String: " . $decryption;

?>