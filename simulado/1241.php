<?php

$x = fgets(STDIN); 
$x = explode(' ',$x);

$a = $x[0];
$b = $x[1];

$tamanhoa = strlen($a - 1);
$tamanhob = strlen($b - 1);
$encaixa=0;


//inverter strings

for($i=0;$i<strlen($a);$i++){
    $veta[$i] = $a[$tamanhoa];  
}

for($i=0;$i<strlen($b);$i++){
    $vetb[$i] = $b[$tamanhob];  
}

for($i=0;$i<strlen($a);$i++){
    echo $veta[$i]."\n";  
}

echo "\n";

for($i=0;$i<strlen($b);$i++){
    echo $vetb[$i]."\n";  
}

/*for($i=$tamanhob; $i >= 0; $i--){
    if($b[$i] === $a[$tamanhoa]){
        $encaixa++;
    }
    $tamanhoa--;
}*/

if($encaixa == strlen($b)){
    echo "encaixa\n";
} else { echo "nao encaixa\n";}



?>
