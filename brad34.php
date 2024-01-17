<?php
   $mysqli = new mysqli('localhost','root', '','ispan', 3306);//建立物件＋連進資料庫
   $mysqli->set_charset('UTF8');
   
   //var_dump($mysqli);
   
   /* $sql = 'insert into cust (cname,tel,birthday)' .
            'values("brad", "123", "1999-01-02")';
   if($mysqli->query($sql)){
    echo'ok';
   }else{
    echo'xx';
   } */

   //以下是當有變數時適用（比較能避免隱碼攻擊）
   $cname = 'amy'; $tel = '456'; $birthday = '1999-01-4';
   $sql = 'insert into cust(cname, tel, birthday) values (?,?,?)';
   $stmt = $mysqli->prepare($sql); //處理問號
   $stmt-> bind_param('sss',$cname, $tel, $birthday);//'sss'->裡面填資料型態（i/d/s/b）
   if($stmt->execute()){
    echo 'ok';
   }else{
    echo'xx';
   }
?>