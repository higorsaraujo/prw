<?php


$quant = 0;
$soma = 0;

while(true){
    $id = readline();

    if($id < 0){
        break;
    }

    $soma += $id;
    $quant++;
}

$media = $soma/$quant;
$media = number_format($media, 2,".","");

echo "$media\n";



?>
