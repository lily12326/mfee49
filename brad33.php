<?php
    include 'bradapis.php';

    $myBike = new Bike();
    $myBike->upSpeed();
    echo $myBike->getSpeed(); //如果 $this->speed 小於 1，則將 $this->speed 的值設置為 1。




?>