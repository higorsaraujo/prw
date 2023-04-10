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


// variacao de segundos

$delta = (($dia2*86400)+($hr2*3600)+($min2*60)+$seg2) - (($dia1*86400)+($hr1*3600)+($min1*60)+$seg1);

$dia = floor($delta / 86400); 
$hr = floor(($delta % 86400)/ 3600);
$min = floor(($delta % 86400) % 3600) / 60;
$seg = floor((($delta % 86400) % 3600) % 60);

/*$seg = $seg2 - $seg1;
$min = $min2 - $min1;
$hr = $hr2 - $hr1;
$dia = $dia2 - $dia1;

if ($hr < 0){
    $hr = $hr + 24;
    $dia = $dia - 1;
}   

if ($min < 0){
    $min = $min + 60;
    $hr = $hr - 1;
}

if ($seg < 0){
 $seg = $seg + 60;
 $min = $min - 1;
}*/

 echo "$dia dia(s)\n";
 echo "$hr hora(s)\n";
 echo "$min minuto(s)\n";
 echo "$seg segundo(s)\n";

?>