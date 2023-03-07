<?php
    $n = readline();
    $valor = array(100,50,20,10,5,2,1);

    echo "$n\n";

    foreach ($valor as $cedula){
        $quant = $n / $cedula;
        $n = $n % $cedula;
        $cedula =  number_format($cedula, 2, ",","");
        echo intval($quant)." nota(s) de R$ $cedula\n";
    }
?>
