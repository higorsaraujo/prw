<?php



$n = readline();

for($i=0;$i<$n;$i++){
    $k = readline();

    $idioma = readline();
    $idiomaigual = true;
    for($x=1;$x<$k;$x++){
        $s = readline();

        if($s != $idioma){ $idiomaigual = false;}
    }

    if($idiomaigual) {echo "$idioma\n";}
    else {echo "ingles\n";}
}

?>