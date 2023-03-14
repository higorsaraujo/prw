<?php

$x = readline(); 
$x = explode(' ',$x);

$a = (int)$x[0];
$b = (int)$x[1];
$c = (int)$x[2];
$d = (int)$x[3];


if($a >= $c){
    $quant = (24*60 - ($a*60 + $b)) + ($c*60 + $d) ; 
} else if($b > $a){
    $quant = (($c*60 + $d) - ($a*60 + $b));
}

$hr = $quant / 60; 

$min = $quant % 60;

echo "O JOGO DUROU " .intval($hr)." HORA(S) E $min MINUTO(S)\n";

?>