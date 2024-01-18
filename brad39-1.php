

<?php
$mysqli = new mysqli('localhost','root', '','ispan', 3306);//建立
$mysqli->set_charset('UTF8');

$sql = 'SELECT id, name, addr, city, town, picurl FROM food ' .
'WHERE name LIKE ? OR addr LIKE ? OR city LIKE ? OR town LIKE ?';

$key = '%中正%';
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('ssss', $key, $key, $key, $key);

if($stmt->execute()){ 
   $stmt->store_result(); //返回布林職
   $stmt->bind_result($id, $name, $addr,$city, $town,$picurl);

?>

<h1>brad big company</h1>
<hr/>




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
         echo "</tr>";
      }
   ?> 
</table>

<?php
   }
   $stmt->free_result(); //釋放記憶體
?>
