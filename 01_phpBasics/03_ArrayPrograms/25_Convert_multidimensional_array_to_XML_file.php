<?php

// Convert multidimensional array to XML file

$array = array (
    'company' => 'gfg',
    'employee' => array (
        '0' => array (
            'name' => 'sarita',
            'age' => '24'
        ),
        '1' => array (
            'name' => 'sandhya',
            'age' => '25'
        ),
        '2' => array (
            'name' => 'Dolly',
            'age' => '23'
        ),
        '3' => array (
            'name' => 'Riya',
            'age' => '26'
        )
    )
);

function generateXML($data) {
    $title = $data['company'];
    $rowcount = count($data['employee']);
    $xmldoc = new DOMDocument();
    $root = $xmldoc -> appendChild($xmldoc -> 
                                   createElement("sarita"));
    $root -> appendChild($xmldoc -> 
                                   createElement("title", $title ));
    $root -> appendChild($xmldoc -> 
                                   createElement("totalRows", $rowcount ));
    $tabUser = $root -> appendChild($xmldoc -> 
                                   createElement('rows'));

    foreach ($data['employee'] as $user) {
        if (!empty($user)) {
            $tabUser = $tabUser -> appendChild($xmldoc ->
                                               createElement('employee'));
            foreach ($user as $key => $val) {
                $tabUser -> appendChild($xmldoc -> 
                                        createElement($key, $val));
            }                                   
        }
    }  
    
    header("Content-type: text/plain");
    $xmldoc -> formatOutput = true;
    $file_name = str_replace(' ','-', $title) . '.xml';
    $xmldoc -> save($file_name);
    return $file_name;

}
?>