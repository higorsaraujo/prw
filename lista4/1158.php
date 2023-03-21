<?php

$y = readline();
$cont=0;
$soma=0;

for($i=0;$i<$y;$i++){
    $x = readline(); 
    $x = explode(' ',$x);

    $a = (int)$x[0];
    $b = (int)$x[1];

    for($cont=0;$cont<$b;){
        if($a % 2 != 0){
            $soma+=$a;
            $cont++;
        }
        $a++;
    }

    echo "$soma\n";
    $soma =0;
}

?>
