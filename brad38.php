<?php
$mysqli = new mysqli('localhost','root', '','ispan', 3306);//建立
$mysqli->set_charset('UTF8');

$sql = "SELECT id as fid, name as fname from food"; //as可寫可不寫，都是給別名的意思。->第9行記得改
$result = $mysqli->query($sql);

while ($row = $result->fetch_object()) {
   echo "{$row->fid} : {$row->fname}<br/>";
} //資料表裡的資料

?>