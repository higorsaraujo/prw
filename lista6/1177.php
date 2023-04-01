<?php

$t = intval(trim(fgets(STDIN)));

$x = 0;
$n = array();

for($i=0;$i<1000;$i++){
    if($x != $t){
        $n[$i] = $x;
        $x++;
    } else if ($x == $t){
        $x = 0;
        $n[$i] = $x;
        $x++;
    }

    echo "N[".$i."] = ".$n[$i]."\n";
}

?>
