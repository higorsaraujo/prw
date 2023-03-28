<?php

$t = intval(trim(fgets(STDIN)));

$x = 0;
$n = array();

for($i=0;$i<10;$i++){
    if($x != $t){
        $n[$i] = $x;
        $x++;
    } else if ($x == $t){
        $x = 0;
        $n[$i] = $x;
    }

    echo $n[$i]."\n";
}

?>
