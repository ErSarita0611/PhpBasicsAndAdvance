<?php

// convert PHP array to JavaScript or JSON

$myarr = array("sarita", "saritakumari7750@gmail.com");
?>

<!-- converting php array into javascript array -->

<script>
    var arr = <?php echo json_encode($myarr); ?>;
    document.write(arr[1]);
</script>

<?php ?>

<!-- Example 2 -->

<?php ?>
<script type="text/javascript">
    <?php
    $php_array = array('sarita', 'is', 'Developer');
    $js_array = json_encode($php_array);
    echo "var javascript_array = ". $js_array . "<br>";
    ?>
    document.write(javascript_array[0]);

</script>
<?php echo "<br>"; ?>




<!-- Example 3: -->
<?php  ?> 
  
<script type='text/javascript'> 
  
<?php 
$php_array = array( 
   array('Geeks', 'for@example.com'), 
   array('for', 'gfg@example.com'), 
); 
$js_array = json_encode($php_array); 
echo "var javascript_array = ". $js_array . ";\n"; 
?> 
  
document.write(javascript_array[0][1]); 
</script> 
  
<?php  ?>