<?php

    $ano = $_GET['ano'];

    if($ano % 4 == 0 && $ano % 100 != 0 || $ano % 400 == 0){
        echo "<h1>Ano bissexto</h1>";
    } else { echo "<h1>Não é ano bissexto</h1>";}

?>