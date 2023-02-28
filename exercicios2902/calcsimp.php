<?php

    $x = readline(); 
    $x = explode(' ',$x);

    $A = (int)$x[0];
    $B = (int)$x[1];
    $C = (int)$x[2];



    $maiorab = ($A + $B + abs($A - $B))/2; 
    $maiorabc = ($maiorab + $C +abs($maiorab - $C))/2;

    echo "$maiorabc eh o maior\n";

?>