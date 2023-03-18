<?php

$n = readline(); 

$ant2=0;
$ant=1;


if($n==1){
	echo "ant2\n";
} else if($n>1){
	echo "$ant2 $ant\n";


for($i=2;$i<$n;$i++){
	$soma = $ant + $ant2;
	$ant2 = $ant;
	$ant = $soma;
	
	echo " $soma\n"; 
}
}

echo "\n";

?>
