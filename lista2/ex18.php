<?php

$dia1 = readline("Dia \n");

$x = readline(); 
$x = explode(' : ',$x);

$hr1 = (int)$x[0];
$min1 = (int)$x[1];
$seg1 = (int)$x[2];

$dia2 = readline("Dia \n");

$x = readline(); 
$x = explode(' : ',$x);

$hr2 = (int)$x[0];
$min2 = (int)$x[1];
$seg2 = (int)$x[2];

$seg = $seg2 - $seg1;
$min = $min2 - $min1;
$hr = $hr2 - $hr1;
$dia = $dia2 - $dia1;

if ($seg < 0){
 $seg = $seg + 60;
 $min--;
 }

 if ($min < 0){
 $min = $min + 60;
 $hr--;
 }

if ($hr < 0){
 $hr = $hr + 24;
 $dia--;
 }

 echo "$dia dia(s)\n";
 echo "$hr hora(s)\n";
 echo "$min minuto(s)\n";
 echo "$seg segundo(s)\n";

?>
