<?php
    $seg = readline();
    $hr = 0;
    $min = 0;

    while($seg>3600){
        $hr++;
        $seg=$seg-3600;
    }
    
    while($seg>60){
        $min++;
        $seg=$seg-60;
    }
    
    echo "$hr:$min:$seg\n";

?>
