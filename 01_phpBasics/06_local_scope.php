<!-- A variable declared within a function has a LOCAL SCOPE and can
 only be accessed within that function: -->

 <?php 

function localScope()
{
    $y = 50;

    echo "</p> Variable y inside function is : $y</p>";
}
localScope();

echo "</p> variable y outside function is : $y</p>"

 ?>