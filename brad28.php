<?php
    $fp = @fopen('dir1/file3.txt', 'a') or die('server busy');  //原本沒有file3

    fwrite($fp, '123');

    fclose($fp);
    echo 'objk';
?>

//讀有多種讀法，寫法較單一
//@ => 如果打不開/沒有這個file，會報錯warning，加了＠就不會報warining（只出現'server busy'）
//如果沒有辦法讀寫執行 -> 開啟dir1的權限（開啟母資料夾權限，才能讀寫執行子檔案的內容）

