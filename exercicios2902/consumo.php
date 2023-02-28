<?php

    $dis = readline();
    $comb = readline();
    $med = $dis / $comb;
    $med = number_format($med, 3, ".","");

    echo "$med km/l\n";

?>