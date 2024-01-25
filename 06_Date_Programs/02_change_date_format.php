<?php
// change date format
// Date in dd/mm/yyyy format and time in 12 hrs format.
// You have to convert date in yyyy/mm/dd format and time in 24 hrs format.

function convertString($date){
$sec = strtotime($date);
$date = date("y-m-d H:i", $sec);
$date = $date . ":100";
echo $date;
}
$date = "25/01/2024 10:30 AM";
convertString($date);
?>