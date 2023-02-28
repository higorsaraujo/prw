<?php

    $nome = readline();
    $salfix = readline();
    $tot = readline();

    $salbon = $salfix + ($tot * 0.15); 
    $salbon = number_format($salbon, 2, ".","");

    echo "TOTAL = R$ $salbon\n";

?>