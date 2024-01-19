<?php
$passwd = '123456';
$newpasswd = password_hash($passwd, PASSWORD_DEFAULT); 
//HASh演算法 -> 判斷兩樣東西是否不一樣;

//echo "{$passwd} : {$newpasswd}";


if (password_verify('123456', $newpasswd)){ //不用加{}？
    echo "ok";
    }else{
        echo "xx";
}





?>