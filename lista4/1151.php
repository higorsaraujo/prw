<?php

$n = readline();

$ant2 = 0;
$ant = 1;

if ($n == 1) {
    echo "0\n";
} else if ($n > 1) {
    echo "$ant2";
    echo " $ant";

    for ($i = 2; $i < $n; $i++) {
        $soma = $ant + $ant2;
        $ant2 = $ant;
        $ant = $soma;

        echo " $soma";
    }
}

echo "\n";

?>