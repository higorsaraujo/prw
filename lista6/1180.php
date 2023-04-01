<?php

$n = intval(trim(fgets(STDIN)));
$x = array();

$ler = fgets(STDIN);
$ler = explode(' ',$ler);

for($i=0;$i<$n;$i++){
    $x[$i] = (double)$ler[$i];
}

$menor = $x[0];

for($i=0;$i<$n;$i++){
    if($x[$i] < $menor){
        $menor = $x[$i];
        $position = $i;
    }
}

echo "Menor valor: $menor\n";
echo "Posicao: $position\n";

?>
