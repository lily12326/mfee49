<?php
   $mysqli = new mysqli('localhost','root', '','ispan', 3306);//建立物件＋連進資料庫
    /* 'localhost', 'root', '', 'ispan', 3306: 這些參數是 mysqli 類的構造函數的參數，它們指定了連接的相關訊息：
    'localhost': 主機名，指定數據庫服務器的位置。在這裡，它是本地主機。
    'root': 用戶名，指定用於登錄 MySQL 的用戶名。
    '': 密碼，指定用戶的密碼。在這裡是空字串，表示沒有密碼。
    'ispan': 數據庫名，指定要連接的數據庫的名稱。
    3306: 端口號，指定 MySQL 服務器的端口號。在這裡，它是 MySQL 默認的端口號。
    */
   
   $mysqli->set_charset('UTF8');
   var_dump($mysqli);
   
    $sql = 'insert into cust (cname,tel,birthday)' .
            'values("brad", "123", "1999-01-02")';
    if($mysqli->query($sql)){ //使用query方法執行非查詢語句： 如果提供的SQL語句是一條非查詢語句（如INSERT、UPDATE、DELETE等），query 方法會執行該語句，並返回一個布林值，表示操作是否成功。
        echo'ok';
    }else{
        echo'xx';
    } 

   //以下是當有變數時適用（比較能避免隱碼攻擊）
   $cname = 'amy'; $tel = '456'; $birthday = '1999-01-4';
   $sql = 'insert into cust(cname, tel, birthday) values (?,?,?)';
   $stmt = $mysqli->prepare($sql); //處理問號 //用prpare這個方法出來的$stmt仍然是物件（所以才能繼續用bind方法）
   $stmt-> bind_param('sss',$cname, $tel, $birthday);//'sss'->裡面填資料型態（i/d/s/b）
   if($stmt->execute()){
    echo 'ok';
   }else{
    echo'xx';
   }
?>