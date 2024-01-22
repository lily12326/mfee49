<!-- session -->

<?php
    session_start(); //避免有些伺服器沒有開說session功能

    $var = rand(0, 100);
    $_SESSION['var']=$var;
    echo $var;
?>
<br/>
<a href = 'brad51.php'>Next</a>