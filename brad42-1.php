<?php
    if(!isset($_REQUEST['account'])) header('location: brad41.php'); //如果沒有account，回到brad.41
       $account =  $_REQUEST['account']; //不管get 和 post，都收
       $passwd = password_hash($_REQUEST['password'],PASSWORD_DEFAULT);
       $name = $_REQUEST['name'] ;

       //echo "{$account} {$passwd}"
    $mysqli = new mysqli('localhost', 'root', '','ispan', 3306);
    $mysqli ->  set_charset('utf8');
    $sql = 'insert into member(account, passwd, name) values(?,?,?)';
    $stmt = $mysqli -> prepare($sql);
    $stmt->bind_param('sss', $account, $passwd, $name);
    if($stmt->execute()){
        echo "success";
    }else{ echo "error"; };
?>