<?php
   $fname = $_GET['fname'];
   $data = $_GET['data']; //依照fname和data存內絨

   $fp = fopen("dir1/{$fname}",'w'); //w模式->相同檔名內容砍掉
   fwrite($fp, $data);
   fclose($fp);

   header("location: dir1/{$fname}"); //導向檔案頁面

?>

