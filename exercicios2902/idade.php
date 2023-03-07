<?php
    $dias = readline();

    $ano = $dias / 365;
    $dias = $dias % 365;

    $mes = $dias / 30;
    $dias = $dias % 30;

    echo intval($ano). " ano(s)\n";
    echo intval($mes) ." mes(es)\n";
    echo $dias ." dia(s)\n";

?>
