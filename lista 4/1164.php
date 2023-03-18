<?php

$y = readline();

for($i = 0; $i < $y; $i++){

$n = readline();

for($x = 1; $x < $n; $x++){
    if($n % $x == 0){
        $soma+=$x;
    }
}

if($soma == $n){echo "$n eh perfeito\n";}
else{echo "$n nao eh perfeito\n";}

$soma = 0;


}
?>
