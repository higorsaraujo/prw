<?php

    $pront = $_POST['pront'];
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $per = $_POST['per'];
    $mod = $_POST['mod'];

    if($pront == ""){echo "Prontuário não pode estar em branco  ";}
    if($nome == ""){echo "Nome não pode estar em branco  ";}
    if($idade < 15 && $idade > 75){echo "Idade entre 15 e 75  ";}
    if($per != "V" or $per != "N"){echo "Período V-Vespertino ou N-Noturno  ";}
    if($mod < 0 && $mod > 4){echo "Modulo entre 1 e 4  ";}

?>