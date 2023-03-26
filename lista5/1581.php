<?php

$n = readline();

for($x = 0; $x < $n;$x++){
    $soma = 0; // zerar variavel
    
    $k = readline();

    $linguas = array();

    for($i=0;$i<$k;$i++){
        $linguas[$i] = fgets(STDIN);
    }

    $soma = array();
    $somainput = 0;


    for($i=0;$i<$k;$i++){

        $compara = $linguas[$i];

        for($y=0;$y<$k;$y++){
            if($linguas[$y] == $compara){
                $somainput++;
            }
        }

        $soma[$i] = $somainput;

        $somainput = 0;
        
    }

    $ingles = 0;

    for($i=0;$i<$k;$i++){
        if($soma[$i] != $k){
            $ingles++;
            break;
        }
    }

    if($ingles > 0){
        echo "ingles\n";
    } else {echo $linguas[0]."\n";}

}

?>