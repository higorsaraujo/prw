<?php

$x = readline(); 
$x = explode(' ',$x);

$cod = (int)$x[0];
$quant = (int)$x[1];

if ($cod == 1){
	$resul=$quant*4;
}	else if ($cod == 2){
	$resul=$quant*4.5;
} else if ($cod == 3){
	$resul=$quant*5;
}	else if($cod == 4){
	$resul=$quant*2;
}	else if($cod == 5){
	$resul=$quant*1.5;
}

$resul = number_format($resul,2, ".","");

echo "Total: R$ $resul\n";

?>
