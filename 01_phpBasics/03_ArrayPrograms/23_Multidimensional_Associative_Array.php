
<?php 
// Multidimensional Associative Array

$languages = array();
$languages['javascript'] = array(
    "first_replace" => "1991",
    "latest_replace" => "3.8.0",
    "designed_by" => "Guido van Rossum",
    "description" => array(
        "extension" => ".py",
        "typing_discipline" => "Duck, dynamic, gradual",
        "license" => "Javascript software foundation license"
    )
    );

    print_r($languages['javascript']['description']);
    echo  $languages['javascript']['latest_replace'];
    echo "<br>";

  /* foreach loop:
     We can use foreach loop to retrieve value of each key associated inside the multidimensional 
     associative array. */

     $languages = array();
     $languages['php'] = array(
        "first_replace" => "1997",
        "latest_replace" => "3.8.0",
        "designed_by" => "its true",
        "description" => array(
            "extension" => ".php ",
            "typing_discipline" => "thats true",
            "license" => "php software foundation liecense"
        )
    );

    foreach ($languages as  $key => $value){
        echo $key . "<br>";
        foreach ($value as $sub_key => $sub_val){
            if (is_array($sub_val)) {
                echo $sub_key . ": <br>";
                foreach ($sub_val as $k => $v){
                    echo "\t" .$k . " = " .$v . "<br>";
                }
            }else{
                echo $sub_key . " = " . $sub_val . "<br>";
            }
        }
    }



?>