<?php
$soma = 0;
$cont = 0;

$o = fgets(STDIN);

$m = array();

for($i=0;$i<12;$i++){
    for($j=0;$j<12;$j++){
        $m[$i][$j] = doubleval(trim(fgets(STDIN)));
    }
}

$limite = 11;

for($i=0;$i<11;$i++){

    for($j=0;$j<$limite;$j++){
        $soma += $m[$i][$j];
        $cont++;
    }
    $limite--;
}


if ($o[0] == "M"){
    $soma = $soma / $cont;
}

$soma = number_format($soma,1,".","");
echo "$soma\n";


?>