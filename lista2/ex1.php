<?php

$x = readline(); 
$x = explode(' ',$x);

$a = (int)$x[0];
$b = (int)$x[1];
$c = (int)$x[2];
$d = (int)$x[3];

    if(($b > $c) and ($d > $a) and (($c + $d) > ($a + $b)) and ($c > 0) and ($d > 0) and ($a % 2) == 0){
            echo "Valores aceitos\n";
                    } else {
        echo "Valores nao aceitos\n";
    }
?>