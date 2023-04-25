<?php

    $nome = $_GET['nome'];
    $idade = $_GET['idade'];

    $dias = $idade * 365;

    echo "<h1>Você tem $dias dias</h1>";
?>