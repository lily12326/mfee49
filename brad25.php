<?php
    date_default_timezone_set('Asia/Taipei');
    $dirtext = 'dir1';
    $dir = opendir($dirtext); //'/'打開mac根目錄
    // echo gettype($dir); => resource
    //var_dump => stream
    
?>
<table border='1' width='100%' >
    <?php
        while($file = readdir($dir)){ //一直讀。讀到false為止
            echo '<tr>';
            echo "<td>{$file}</td>";
                if(is_dir("{$dirtext}/{$file}")){
                    echo"<td>Dir</td>";
                }else if(is_file("{$dirtext}/{$file}")){
                    echo"<td>File</td>";
                }
            $size = filesize("{$dirtext}/{$file}");
                echo "<td>{$size}bytes</td>";
            $mtime = date('Y-m-d H:i:s', filemtime("{$dirtext}/{$file}"));
            echo "<td>{$mtime}</td>";
            
            echo'</tr>';
        }
    
    ?>
</table>
<?php
    closedir($dir);
?>
