<?php

    $date = date('d/m/y');
    $dia = substr($date,0,2);
    echo "Dia: ".$dia."<br>";
    //implementar mes e ano

    $mes = substr($date,3,2);

    echo "Mes: ".$mes."<br>";

    $ano = substr($date,6,2);

    echo "Ano: ".$ano."<br>";

?>