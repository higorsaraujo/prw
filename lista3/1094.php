<?php
    $n = readline();
    $somac = 0;
    $somar = 0;
    $somas = 0;

    for($i = 0; $i < $n; $i++){
        $x = readline(); 
        $x = explode(' ',$x);

        $a = (int)$x[0];
        $b = (string)$x[1];

        if($b == "C"){$somac += $a;}
            else if($b == "R"){$somar += $a;}
            else if($b == "S"){$somas += $a;}
    }

    $tot = $somac + $somar + $somas;

    $perc = $somac *(100/$tot);
    $perr = $somar *(100/$tot);
    $pers = $somas *(100/$tot);

    $perc = number_format($perc,2,".","");
    $pers = number_format($pers,2,".","");
    $perr = number_format($perr,2,".","");

    echo "Total: $tot cobaias\n";
    echo "Total de coelhos: $somac\n";
    echo "Total de ratos: $somar\n";
    echo "Total de sapos: $somas\n";
    echo "Percentual de coelhos: $perc %\n";
    echo "Percentual de ratos: $perr %\n";
    echo "Percentual de sapos: $pers %\n";
?>