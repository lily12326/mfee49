<!-- session -->

<?php
    include 'bradapis.php';
    session_start(); //避免有些伺服器沒有開說session功能

    $var = rand(0, 100);
    $ary =[1,2,3,4];
    $s1 = new Student('Brad', 70, 34, 52);
    
    $_SESSION['var']= $var; //就算之後變數賦值有更動，也不影響儲存到的直
    $_SESSION['ary']= $ary; //就算之後陣列有更動，也不影響儲存到的直
    $_SESSION['s1']= $s1;   //物件內容有變動，儲存到的'址'就變了（line21
    
    
    echo $var. '<hr/>';
    echo "{$s1->getName()} : {$s1->sum()} : {$s1->avg()}";

    $var = 123;
    $ary =[7, 8, 9, 10]; 
    $s1 -> setCh(80);
?>
<br/>
<a href = 'brad51.php'>Next</a>