<?php

$x = readline(); 
$x = explode(' ',$x);

$a = (double)$x[0];
$b = (double)$x[1];
$c = (double)$x[2];

$delta = ($b*$b) - (4*$a*$c);

if(($delta < 0) or ($a == 0)){
    echo "Impossivel calcular\n";
} else {
    $x1 = ((-$b) + sqrt($delta))/ (2*$a);
    $x1 = number_format($x1, 5, ".","");

    $x2 = ((-$b) - sqrt($delta)) / (2*$a);
    $x2 = number_format($x2, 5, ".","");

    echo "R1 = $x1\n";
    echo "R2 = $x2\n";
}
?>
