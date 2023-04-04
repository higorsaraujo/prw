<?php

while(true){

$m = array();

// ler ordem da matriz

$ordem = intval(trim(fgets(STDIN)));

if($ordem == 0){
    break;
}

$comeco = 0;
$fim = $ordem;
$x = 1;

// contruir matriz

while(true){
    for($i=$comeco;$i<$fim;$i++){
        for($j=$comeco;$j<$fim;$j++){
            $m[$i][$j] = $x; 
        }
    }

    if($fim == 0){
        break;
    }

    $fim--;
    $comeco++;
    $x++;
}

//imprimir matriz

for ($i = 0; $i < $ordem; $i++) {
    for ($j = 0; $j < $ordem; $j++) {
        if ($j == 0)
					printf("%3d", $m[$i][$j]);
				else
					printf(" %3d", $m[$i][$j]);
    }
    echo "\n";
}

echo "\n";

}

?>
