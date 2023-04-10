<?php

while(true){
    
    $val = 0;
    $n = readline();
    if($n == 0){
        echo "\n";
        break;
    }

    

    $str = array();

    for ($i = 0; $i < $n; $i++) {
        $str[$i] = readline();
        $str[$i] = trim($str[$i]);
        $str[$i] = preg_replace('/\s+/', ' ', $str[$i]);
    }

    //ver qual e a maior string

    for ($i = 0; $i < $n; $i++){
        if(strlen($str[$i]) > $val){
            $val = strlen($str[$i]);
        }
    }
    $quant = 0;

    // aplicar os espacos nas strings que for necessario

    for ($i = 0; $i < $n; $i++){
        $quant = $val - strlen($str[$i]);
        $preenche = str_repeat(" ",$quant);

        echo $preenche.$str[$i]."\n";

        $quant = 0;
    }
    
    echo "\n";
}

?>
