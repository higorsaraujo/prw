<?php

$x = readline();

for($i1=0;$i1<$x;$i1++){

$m = trim(fgets(STDIN));

for($i=0;$i<strlen($m);$i++){
    if($m[$i] == 'P') {$m[$i] = 'B';}
    if($m[$i] == 'F') {$m[$i] = 'V';}
    if($m[$i] == 'T') {$m[$i] = 'D';}
    if($m[$i] == 'R') {$m[$i] = 'L';}
    if($m[$i] == 'J') {$m[$i] = 'Z';}
    if($m[$i] == 'X') {$m[$i] = 'S';}

}

$vet = explode(' ',$m);

$vet = array_reverse($vet);

echo implode(" ",$vet)."\n";

}

?>