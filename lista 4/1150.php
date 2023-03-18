<?php

$z=0;
$soma=1;
$teste=0;

$x = readline();

while(!($z>$x)){
	echo "$z\n";
}


$teste=$x;


while($teste<$z){
	
	$x++;
	
	$teste = $teste + $x;
	
	
	$soma++;
		
}

echo "$soma\n";

?>
