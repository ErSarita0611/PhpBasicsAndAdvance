<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h2>other way of using date() function</h2>
    <?php
    echo "Date in Year.Month.Day format is : " . date("Y.m.d") . "<br>";
    echo "Date in Year-Month-day format is : " . date("Y-m-d") . "<br>";
    echo "Date in Year/Month/day format is : " . date("Y/m/d") . "<br>";
    ?>
    
</body>
</html>

<?php
// How to get the current Date and Time
echo "Current date and time is : ";
$myDate = date("d-m-y h:i:s");
echo $myDate;
echo "<br>";

?>