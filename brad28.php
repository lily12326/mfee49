<?php
    $fp = @fopen('dir1/file3.txt', 'r') or die('server busy');  //原本沒有file3

    fclose($fp);
    echo 'objk';
?>

//讀有多種讀法，寫法較單一


