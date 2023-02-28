<?php
    $r = readline();
    $pi = 3.14159;

    $vol = (4.0/3) * $pi * ($r * $r * $r);
    $vol = number_format($vol, 3, ".","");
    echo "VOLUME = $vol\n";

?>