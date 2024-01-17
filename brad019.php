<?php
  function sayYa(){
    echo 'Ya!<br/>';
  }

  function sayHello($name = 'Lily'){
    echo "hello, my name is {$name}<br/>";
  }

  function sayHello2($name, $n = 1){
    for ($i = 0; $i < $n; $i++){
      echo "hello, my name is {$name}<br/>";
    }
  }

  sayYa();
  sayHello("Brad");
  sayHello();
  sayHello2("John"); // 提供了一個參數，設定默認值為 1
  sayHello2('Brad', 3);

  function sum(){
    $args = func_get_args();
    $sum = 0;
    foreach($args as $v){
      $sum += $v;
    }
    return $sum;
  }

  echo sum(1, 2, 3, 4, 5, 6, 100, 200);
?>

