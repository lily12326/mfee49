<?php
   // https://data.moa.gov.tw/Service/OpenData/ODwsv/ODwsvTravelFood.aspx
   //    file_get_contents(
//       string $filename,
//       bool $use_include_path = false,
//       ?resource $context = null,
//       int $offset = 0,
//       ?int $length = null
//   ): string|false
   
$json = file_get_contents('https://data.moa.gov.tw/Service/OpenData/ODwsv/ODwsvTravelFood.aspx');

$data = json_decode($json);
   //var_dump($data); -> 陣列

$mysqli = new mysqli('localhost','root', '','ispan', 3306);//建立
$mysqli->set_charset('UTF8');

$mysqli->query('delete from food');
$mysqli->query('alter table food auto_increment = 1'); //使id從1號開始



$sql = 'insert into food (foodid,name,addr,feature,city,town,picurl,lat,lng) ' .
'values (?,?,?,?,?,?,?,?,?)';
$stmt = $mysqli->prepare($sql);



//解析
foreach ($data as $row) {   //$ROW是物件
   $stmt->bind_param('sssssssdd',$row->ID,$row->Name,
        $row->Address,$row->FoodFeature,$row->City,$row->Town,$row->PicURL,
        $row->Latitude,$row->Longitude);
        $stmt->execute();
   //echo "{$row->ID} : {$row->Name} : {$row->Tel}<br>";
}




?>