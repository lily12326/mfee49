<meta charset="UTF-8" />

<?php
$mysqli = new mysqli('localhost','root', '','ispan', 3306);//建立
$mysqli->set_charset('UTF8');
$sql ='SELECT id, name, addr, city, town, picurl FROM food ';

if  (isset($_GET['key'])) {
  $sql .= 'WHERE name LIKE ? OR addr LIKE ? OR city LIKE ? OR town LIKE ?'; //.=附加
   $sql.= 'limit 10';
  
  
  $key = "%{$_GET['key']}%";
   $stmt = $mysqli->prepare($sql);
   $stmt->bind_param('ssss', $key, $key, $key, $key);


   
}else{
   $sql .= 'limit 7, 7' //第一頁7,第二頁增加7筆
   $stmt = $mysqli->prepare($sql);
}

if($stmt->execute()){ 
   $stmt->store_result(); //返回布林職
   $stmt->bind_result($id, $name, $addr,$city, $town,$picurl);

?>

<h1>brad big company</h1>
<hr/>


<form>
   <input name="key"/>
   <input type="submit"value="搜尋"/>
</form>

<table border="1" width="100%">
   <tr>
      <th>id</th>
      <th>name</th>
      <th>addr</th>
      <th>city</th>
      <th>town</th>
   </tr>
   <?php
      while($stmt->fetch()){ //每fetch一筆資料，放入變數中
         echo "<tr>";
         echo "<td>{$id}</td>";
         echo "<td>{$name}</td>";
         echo "<td>{$addr}</td>";
         echo "<td>{$city}</td>";
         echo "<td>{$town}</td>";
         echo "<td><img src="{$picurl}" width="160px" height="90px"/></td>";
         echo "</tr>";
      }
   ?> 
</table>

<?php
   }
   $stmt->free_result(); //釋放記憶體
?>
