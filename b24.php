<?php
    $img = imagecreatefromjpeg('sky.jpg');

    $blue = ImageColorAllocate($img, 0, 0, 255);
    imagettftext($img, 348, 0, 1000, 900, $blue, 'lily2.ttf', 'hello, world!');

    header('content-type:image/jpeg');
    imagejpeg($img);
    //imagejpeg($img, 'xxx.jpg');

  

    imagedestroy($img);
?>