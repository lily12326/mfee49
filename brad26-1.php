<?php
    $fname = 'dir1/file1.txt';
    $fp = fopen( $fname, 'r');

    $content  = fread($fp, filesize($fname));
    echo $content;

    fclose($fp);

?>

//這種方式也是指標，一部分一部分讀，和26差別只是一開始先設定讀取全部（容器準備多大） => filesize($fname)
