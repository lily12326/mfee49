<?php
  $score = rand(0,100);
  echo "{$score}<hr/>";
  if($score >= 90){
    echo "a";
  } else if($score >= 80){
    echo "b";
  } else if($score >= 70){
    echo "c";
  } else if($score >= 60){
    echo "d";
  }
  else{
    echo "e";
  }
?>
