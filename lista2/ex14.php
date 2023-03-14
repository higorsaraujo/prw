<?php

$verinv = readline();
$filo = readline();
$comida = readline();

if($verinv == "vertebrado") {
    $filo = readline();

    if($filo == "ave"){
        $comida = readline();

        if($comida == "carnivoro"){echo "aguia\n";}
            else if ($comida == "onivoro") {echo "pomba\n";}
    }else if ($filo == "mamifero"){
        $comida = readline();

        if($comida == "onivoro"){echo "homem\n";}
            else if ($comida == "herbivoro") {echo "vaca\n";}
    }
} else if ($verinv == "invertebrado"){
    if($filo == "inseto"){
        $comida = readline();

        if($comida == "hematofago"){echo "pulga\n";}
            else if ($comida == "herbivoro") {echo "lagarta\n";}
    }else if ($filo == "anelideo"){
        $comida = readline();

        if($comida == "hematofago"){echo "sanguessuga\n";}
            else if ($comida == "onivoro") {echo "minhoca\n";}

        }
    }

?>
