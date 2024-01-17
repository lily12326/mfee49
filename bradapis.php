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

  function sum(){
    $args = func_get_args();
    $sum = 0;
    foreach($args as $v){
      $sum += $v;
    }
    return $sum;
  }

  function checkTWID($id){
    $check = false;
    
    // if (strlen($id) == 10){
    //     $c1 = substr($id, 0 ,1);
    //     $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    //         if (strops($letters, $c1) !== false){ //因為如果位在第一位，會返回0；如果未找到，也是返回0）
    //             $c2 = substr($id, 1 ,1);
    //             if($c2 == '1' || $c2 == '2'){
    //                 //待完成
    //             }
    //         }
            
    // }
    //正規表示法
    if (preg_match('/^[A-Z][12][0-9]{8}$/', $id)){
        $letters = 'ABCDEFGHJKLMNPQRSTUVXYWZIO';
        $a12 = strpos($letters, substr($id, 0 ,1))+10;
        $a1 = (int)($a12/10);
        $a2 = $a12 % 10;
        $n1 =  substr ($id, 1, 1);
        $n2 =  substr ($id, 2, 1);
        $n3 =  substr ($id, 3, 1);
        $n4 =  substr ($id, 4, 1);
        $n5 =  substr ($id, 5, 1);
        $n6 =  substr ($id, 6, 1);
        $n7 =  substr ($id, 7, 1);
        $n8 =  substr ($id, 8, 1);
        $n9 =  substr ($id, 9, 1);
        $sum = $a1*1 + $a2*9 + $n1*8 + $n2*7 + $n3*6 + $n4*5 +
                $n5*4 + $n6*3 + $n7*2 + $n8*1 + $n9*1; 
            $check = $sum % 10 == 0;
    }

    return $check; 
  }



?>
