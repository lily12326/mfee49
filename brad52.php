<?php
    session_start();
    //unset($_SESSION['var']);
    session_destroy();
    header('Location: brad50.php');
?>
