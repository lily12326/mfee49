<?php
    $data = file('dir1/ns1hosp.csv');  
    // gettype($content) =>  //array
    foreach($data as $line){
        $fields = explode(',', $line );
        echo "{$fields[2]}"."{$fields[4]}"."{$fields[7]}<br/>";
    }


?>

//比較針對文字資料


