<?php
    session_start();
    if(!isset($_SESSION['var']))header('Location: brad50.php');
    
    $var = $_SESSION['var'];
    echo $var;
?>
<br/>
<a href = 'brad52.php'>Logout</a>