<?php

    $num = readline();
    $hr = readline();
    $valhr = readline();

    $sal = $valhr * $hr; 
    $sal = number_format($sal, 2, ".","");

    echo "NUMBER = $num\n";
    echo "SALARY = U$ $sal\n";

?>