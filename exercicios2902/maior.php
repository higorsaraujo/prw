<?php

    $x = readline(); 
    $x = explode(' ',$x);

    $cod1 = (int)$x[0];
    $num1 = (double)$x[1];
    $val1 = (double)$x[2];

    $y = readline(); 
    $y = explode(' ',$y);

    $cod2 = (int)$y[0];
    $num2 = (double)$y[1];
    $val2 = (double)$y[2];

    $tot = ($num1 * $val1 ) + ($num2 * $val2); 
    $tot = number_format($tot, 2, ".","");

    echo "VALOR A PAGAR: R$ $tot\n";

?>