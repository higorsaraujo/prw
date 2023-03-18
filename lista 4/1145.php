<?php

$i = 1;
$y = 0;

$x = readline(); 
$x = explode(' ',$x);

$a = (int)$x[0];
$b = (int)$x[1];

for($i = $i; $i <= $b; $i++){
    echo "$i";

    $y++;
    
    if($y % $a != 0){
        echo " ";
    } else {echo "\n";}
}


?>
