<?php
    if(!isset($_POST['account'])) header('location: brad41.php'); //如果沒有account，回到brad.41
       $account =  $_POST['account']. '<br/>'; //後端取得account資料存在$_post
       $passwd = $_POST['password']; 

       echo "{$account} {$passwd}"
?>