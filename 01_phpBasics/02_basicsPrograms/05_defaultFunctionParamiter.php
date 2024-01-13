
<?php 

function greeting($name="sarita")
{
    echo "Welcome to $name ";
    echo "<br>";
}

greeting("Sari");

// passing no value
greeting();
greeting("A computer science portal");


function welcome($first = "sari",
$last = "A Computer science portal for online")
{
    echo "Sarita : $first $last";
    echo "<br>";
}
welcome();
welcome("night_fury");
welcome("night_fury","Contributor");

?>