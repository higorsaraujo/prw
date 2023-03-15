<?php

$n = readline(); 
$i = 0;
$soma = 0;

for($i = 0; $i < $n; $i++){
    $x = readline(); 
    $x = explode(' ',$x);

    $a = (int)$x[0];
    $b = (int)$x[1];

    if($a < $b){
        for($a = $a+1; $a < $b; $a++){
            if($a % 2 != 0){
                $soma[$i] += $a;
            }
        }
    } else if($a > $b){
        for($b = $b+1; $b < $a; $b++){
            if($b % 2 != 0){
                $soma[$i] += $b;
            }
        }
    } else if($a == $b){
        $soma[$i] = 0;
    }
}

for($i = 0; $i < $n; $i++){
    echo $soma[$i]."\n";
}



?>