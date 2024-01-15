<?php
$year = rand(0,1000);
echo "{$year}<hr/>";
  
  if($year % 4 == 0){
    if($year % 100 == 0){
      if($year % 400 == 0){
        echo "是閏年";
      }else{
        echo "是平年";
      }
      
    }
    else{
      echo "是閏年";
    }
  } else {
    echo "是平年";}
?>
