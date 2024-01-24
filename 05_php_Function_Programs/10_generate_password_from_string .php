<?php
// generate simple random password from a given string using PHP

function get_password($str, $len = 0) {
    $pass = "";
    $str_length = strlen($str);
    if ($len == 0 || $len > $str_length) {
        $len = $str_length;
    }
    for ($i=0; $i < $len; $i++) { 
        $pass .= $str[rand(0, $str_length)];
    }
    return $pass;
}
$str = "sarita";
echo get_password($str, 5) . "\n<br>";
$str = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789";
echo get_password($str, 15) . "\n<br>";
echo get_password($str) . "\n<br>";

?>