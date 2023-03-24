<?php


$val = 0;


while(true){
    $n = readline();
    if($n == 0){
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

        $str[$i] = $preenche.$str[$i];

        $quant = 0;
    }

    for ($i = 0; $i < $n; $i++){
        echo ($str[$i]).PHP_EOL;
    }

    echo "\n";

}

?>
