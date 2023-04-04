<?php

$x = readline();

$saque = 0;
$bloqueio = 0;
$ataque = 0;

$saque1 = 0;
$bloqueio1 = 0;
$ataque1 = 0;


for($i=0;$i<$x;$i++){

    $nome = readline();

    
    $x = explode(' ',$x);
    $y = readline(); 

    $x = readline(); 
    $y = explode(' ',$y);


    $S = (int)$x[0];
    $B = (int)$x[1];
    $A = (int)$x[2];

    $S1 = (int)$y[0];
    $B1 = (int)$y[1];
    $A1 = (int)$y[2];

    $saque += $S;
    $bloqueio += $B;
    $ataque += $A;

    $saque1 += $S1;
    $bloqueio1 += $B1;
    $ataque1 += $A1;
}

$persaque = $saque / 100 * $saque1;
$perbloqueio = $bloqueio / 100 * $bloqueio1;
$perataque = $ataque / 100 * $ataque1;

$persaque = number_format($persaque,2,".","");
$perbloqueio = number_format($perbloqueio,2,".","");
$perataque = number_format($perataque,2,".","");

echo "Pontos de Saque: $persaque %.\n";
echo "Pontos de Bloqueio: $perbloqueio %.\n";
echo "Pontos de Ataque: $perataque %.\n";

?>
