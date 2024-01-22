<?php
    if(!isset($_REQUEST['account'])) header('location: brad41.php'); //如果沒有account，回到brad.41
  
    $account =  $_REQUEST['account']; //不管get 和 post，都收
    $passwd = password_hash($_REQUEST['password'],PASSWORD_DEFAULT);
    $name = $_REQUEST['name'] ;
    $icon = $_FILES['icon'];
    $iconData = file_get_contents($icon['tmp_name']);
    $iconType = $icon['type'];
       //echo "{$account} {$passwd}"
    $mysqli = new mysqli('localhost', 'root', '','ispan', 3306);
    $mysqli ->  set_charset('utf8');
    $sql = 'insert into member(account, passwd, name, icon, icontype) values(?,?,?,?,?)';
    $stmt = $mysqli -> prepare($sql);
    $stmt->bind_param('sssbs', $account, $passwd, $name, $iconData, $iconType);
    if($stmt->execute()){
        echo "success";
    }else{ echo "error"; };
?>