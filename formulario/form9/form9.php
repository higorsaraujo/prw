<?php

    $hr = $_GET['hr'];

    $hora = intval(substr($hr,0,2));

    if($hr < 12){echo "<h1>Bom dia</h1>";}
    else if ($hr >= 12 && $hr < 18) {echo "<h1>Boa tarde</h1>";}
    else if ($hr >= 18) {echo "<h1>Boa noite</h1>";}

?>