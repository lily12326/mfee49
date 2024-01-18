<?php
   $mysqli = new mysqli('localhost','root', '','ispan', 3306);//建立物件＋連進資料庫
   $mysqli->set_charset('UTF8');
//    var_dump($mysqli);
  
   $id = 3;
   $sql = 'delete from cust where id =?';
   $stmt = $mysqli->prepare($sql); //處理問號 //用prpare這個方法出來的$stmt仍然是物件（所以才能繼續用bind方法）
   $stmt-> bind_param('i', $id);//'sss'->裡面填資料型Ｐ態（i/d/s/b）
   if($stmt->execute()){
    echo 'ok';
   }else{
    echo'xx';
   }
?>