<?php
$mysqli = new mysqli('localhost','root', '','ispan', 3306);//建立
$mysqli->set_charset('UTF8');

$sql = "SELECT * from food";
$result = $mysqli->query($sql);






?>