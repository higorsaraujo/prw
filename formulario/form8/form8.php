<?php

    $num = $_GET['num'];

    echo "<h1>Tabuada do $num</h1>";

    for($x=0;$x<=10;$x++){
        $mult = $x * $num;
        echo "<p>$num x $x = $mult</p>";
        echo "<br>";
    }

?>