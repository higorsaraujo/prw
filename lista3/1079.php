<?php
    $n = readline();

    for($i = 0;$i < $n; $i++){
        
        
        $x = readline(); 
        $x = explode(' ',$x);

        $a = (double)$x[0];
        $b = (double)$x[1];
        $c = (double)$x[2];

        $media[$i] = ($a*2 + $b*3 + $c*5)/10;
    }

    for($i = 0;$i < $n; $i++){
        $media[$i] = number_format($media[$i],1,".","");

        echo $media[$i]."\n";
    }
?>