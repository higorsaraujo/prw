<?php

$y = readline();

for($i = 0; $i < $y; $i++){

    $n = readline();
    $cont = 0;
    
    for($div=1;$div<=$n;$div++){
        if($n % $div == 0){
            $cont++;
        }
    }

    if($cont == 2){echo "$n eh primo\n";}
    else{echo "$n nao eh primo\n";}

}


?>
