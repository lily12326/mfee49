<?php
 $upload = $_FILES['upload']; //檔案特別的接收方式
 foreach($upload as $k => $v){
    echo "{$k}:{$v}<br/>";
 }
 if ($upload['error'] == 0){
    move_uploaded_file($upload['tmp_name'], "dir1/{$upload['name']}");
 }else{
    echo "error";
 }
?>