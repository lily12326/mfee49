<table border="1" width="100%">
    <?php
        define('ROWS',2);
        define('COLS',4);
        define('START',2);

      
        for($k = 0; $k < ROWS; $k++){
            echo '<tr>';
            for($j = START; $j < (START+COLS); $j++){
                $newj = $j + $k * COLS;
                $bgcolor = ($newj % 2 == 0)? 'pink':'yellow'; //如果 $newj 除以 2 的余数等于 0（即 $newj 是偶数），那么 $bgcolor 的值就是 'pink'；否则，它的值就是 'yellow'
                echo "<td bgcolor={$bgcolor}>";
                for ($i = 1; $i <= 9 ; $i++ ){
                    $v = $newj * $i;
                    echo "{$newj} * {$i} = {$v}<br/>";
                }
                echo '</td>';
            }
            echo '</tr>';
        }
    ?>
</table>