<?php
 $upload = $_FILES['upload']; //var_dump($upload);
 foreach($upload['error'] as $k => $errno){
  if($errno == 0){
   move_uploaded_file($upload['tmp_name'][$k], 
   "dir1/dir2/{$upload['name'][$k]}"); //保留原黨名
  }
}
?>