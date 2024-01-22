<?php
 $upload = $_FILES['upload']; //檔案特別的接收方式
 foreach($upload as $k => $v){
    echo "{$k}:{$v}<br/>";
 }
 if ($upload['error'] == 0){
    move_uploaded_file($upload['tmp_name'], "dir1/{$upload['name']}"); //"dir1/{$upload['name']}"); 這行程式碼會將暫存檔搬移到 "dir1/" 目錄下，並以原始檔案名稱命名。
 }else{
    echo "error";
 }
?>