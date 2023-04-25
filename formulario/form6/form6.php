<?php

    $nome = $_POST['nome'];
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $freq = $_POST['freq'];

    $media = ($n1 + $n2)/2;

    if($media < 5){ echo "<h1 style='color:red';>Reprova por nota</h1>";}
    if($freq < 75 ){echo "<h1>Reprova por Frequência</h1>";}
    if($media > 5 && $freq > 75){echo "<h1>Aprovado</h1>";}

?>