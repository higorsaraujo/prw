<?php

    $cp = $_GET['cp'];
    $cm = $_GET['cm'];
    $cg = $_GET['cg'];

    $tot = ($cp * 10) + ($cm * 12) + ($cg * 15);
    $tot = number_format($tot,2,'.','');

    echo "<h1>Total desembolsado: R$ $tot</h1>";

?>