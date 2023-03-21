<?php


$x = readline();

do{
	$z = readline();
}
while($x>=$z);


for($a=$x ,$b=0; $b<$z; $a++)
{
	$b+=$a;
	$soma++;
}

echo "$soma\n";

?>
