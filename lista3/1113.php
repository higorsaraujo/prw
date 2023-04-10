<?php

while(true){
    $l = readline();
    $l = explode(' ',$l);
    $x = (int)$l[0];
    $y = (int)$l[1];

    if($x == $y){
        break;
    }

    if($x > $y){
        echo "Decrescente\n";
    } else if ($x < $y){
        echo "Crescente\n";
    }
}

?>
