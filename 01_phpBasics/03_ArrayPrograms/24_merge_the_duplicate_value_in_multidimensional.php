<?php

// merge the duplicate value in multidimensional

$arr = array(
    array('Roll'=>45, 'name'=>'sarita', 'subject'=>'course-011'),
    array('Roll'=>50, 'name'=>'sandhya', 'subject'=>'course-012'),
    array('Roll'=>58, 'name'=>'Dolly', 'subject'=>'course-013')

);
$myarray = array();
$keys = array_keys($arr);
for ($i=0; $i < count($arr); $i++) { 
    $keys = array_keys($arr);

    foreach ($arr[$keys[$i]] as $key => $value) {
        $f = 0;
        for($j = 0; $j < count($arr); $j++){
            if($i != $j){
                foreach ($arr[$keys[$j]] as $key1 => $value1) {
                    if(($key1 == $key) && ($value == $value1)) {
                        $f = 1;
                        $dup_ind = $j;
                    }
                    
                }
            }
        }
    }

    if ($f == 1) {
        $temp_arr = array();
        array_push($temp_arr, $arr[$i]);
        array_push($temp_arr, $arr[$dup_ind]);
        unset($arr[$dup_ind]);
        array_push($myarray, $temp_arr);
    }
    else {
        array_push($myarray, $arr[$keys[$i]]);
    }
}

print_r($myarray);
echo "<br>";


// 2: In this example the duplicate field is more than two. 


$arr = array( 
    array('Roll'=>43, 'name'=>'Geeks', 'subject'=>'Course-011'),
    array('Roll'=>38, 'name'=>'GFG', 'subject'=>'Course-011'), 
    array('Roll'=>26, 'name'=>'GeeksforGeeks', 'subject'=>'Course-011'), 
    array('Roll'=>31, 'name'=>'gfg', 'subject'=>'Course-012')
);

foreach($arr as $k => $v) {
    $new_arr[$v['subject']][]=$v;
}
 
print_r($new_arr);

?>