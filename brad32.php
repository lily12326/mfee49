<?php
   class Bike{
      private $speed = 0; //屬性 -> 需要初始化
      
      function upSpeed(){
            $this -> speed = $this -> speed <1 ? 1 : $this -> speed * 1.2;
      } //圍繞屬性設計方法 // -> 相當於 js的.
      //(condition) ? expression_if_true : expression_if_false;
      //如果 $this->speed 小於 1，則將 $this->speed 的值設置為 1。
      //如果 $this->speed 大於等於 1，則將 $this->speed 的值設置為原值乘以 1.2。
   
   
      function downSpeed(){
         $this -> speed = $this -> speed <1 ? 0 : $this -> speed * 0.7;
      }
      
      function getSpeed(){
         return $this->speed;
      }
   
   }


   $myBike = new Bike(); //把新記憶體位置傳遞給mybike
   //var_dump($myBike); //object(Bike)#1 (1) { ["speed"]=> int(0) }
   $urBike = new Bike();
   
  
   $myBike->upSpeed(); 
   $myBike->upSpeed();
   $myBike->upSpeed();
   $myBike->upSpeed();
   $myBike->upSpeed();
   $myBike->upSpeed();

   echo $myBike->getSpeed . '<br/>';

   $myBike->downSpeed(); 
   $myBike->downSpeed();

   echo $myBike->getSpeed . '<hr/>';

   $urBike->upSpeed(); $urBike->upSpeed();$urBike->upSpeed(); $urBike->upSpeed();$urBike->upSpeed(); $urBike->upSpeed();   $urBike->upSpeed(); $urBike->upSpeed();$urBike->upSpeed(); $urBike->upSpeed();
   echo $urBike->getSpeed . '<br/>';


?>

