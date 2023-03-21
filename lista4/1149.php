<?php

$i = 1;

$x = readline(); 
$x = explode(' ',$x);


$a = (int)$x[0];
$b = (int)$x[$i];


do{$b = readline(); $i++;}
while ($b <= 0);

$y = 0;

for($i = 0; $i < $b; $i++){
    $y += $a + $i;
}

echo "$y\n";

?>
