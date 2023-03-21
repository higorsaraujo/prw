<?php

$s = 1;
$a = 2;
$x = 1;

for($i = 3;$i<=39;$i += 2){
    $s += $i/(pow($a,$x));
    $x++;
}

$s = number_format($s, 2, ".","");
echo "$s\n";



?>
