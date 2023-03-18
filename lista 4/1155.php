<?php

$s = 1;

for($i = 2;$i<=100;$i++){
    $s += 1/$i;
}

$s = number_format($s, 2, ".","");
echo "$s\n";



?>
