<?php

$m = 1;
$n = 1;

while($m == 0 || $m < 0 || $n == 0 || $n < 0){
    $x = readline(); 
    $x = explode(' ',$x);

    $m = (int)$x[0];
    $n = (int)$x[1];
}

if($x > $y){
    for($y = $y; $y<=$x;$y++){
        echo "$y ";
        $soma += $y;
    }
} else if($x < $y){
    for($x = $x; $x<=$y;$x++){
        echo "$x ";
        $soma += $x;
    }
} 
?>
