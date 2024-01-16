<?php
 $poker = range(0,51);
//  var_dump =($poker);
 shuffle($poker);
 foreach($poker as $v){
    echo "{$v}<br/>";
}
echo "<hr/>";
$players = [[],[],[],[]];//二維陣列
foreach($poker as $index => $card){
    $players[$index % 4][(int)($index / 4)] = $card;
} 
foreach($players[0] as $card){
    echo "{$card}<br/>";
    
}


?>


<hr/>
<table border="1" width="100%">
        <?php

            $color = ['&spades;', '<font color = red>&hearts;', '&diams;', '&clubs;' ];
            foreach($players as $player){//各家
                sort($player);
                echo '<tr>';
                foreach($player as $card){//各家的牌
                    $colorIndex = (int)($card/13);
                    $newCard = ($card %13 +1);
                    echo "<td>{$color[$colorIndex]}{$newCard}</td>";
                }
                echo '</tr>';

            }
            
        ?>
    
</table>

&spades; &hearts; &diams; &clubs;  