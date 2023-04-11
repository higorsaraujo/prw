<?php

$l = readline();

//construir matriz

for($i=0;$i<5;$i++){
    for($j=0;$j<5;$j++){
        $m[$i][$j] = doubleval(trim(fgets(STDIN)));
    }
}

//mostrar valores

for($i=0;$i<5;$i++){
    for($j=0;$j<5;$j++){
        if($m[$i][$j] >= $l){
            $m[$i][$j] = number_format($m[$i][$j],2,'.','');
            echo "Valor Encontrado: ". $m[$i][$j]. " Linha: $i Coluna: $j\n";
        }
    }
}

?>