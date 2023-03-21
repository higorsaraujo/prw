<?php

    $date = date('d/m/y');
    echo "data: ".$date."<br>";
    $d = explode('/',$date);

    echo "Dia: ".$d[0]."<br>";
    echo "Dia: ".$d[1]."<br>";
    echo "Dia: ".$d[2]."<br>";

    // Utilizar explode para separar as palavas
    // utilizando <espaco>

    $str = "IFSP Campus Birigui";

    $s = explode(' ',$str);

    for($i=0;$i<count($s);$i++){
        echo $s[$i]."<br>";
    }


?>