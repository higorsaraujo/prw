<?php

$n = array();

for($i = 0; $i < 20; $i++){
    $n[$i] = doubleval(trim(fgets(STDIN)));
}

$y = 19;
$n2 = array();

for($i=0;$i<20;$i++){
    $n2[$i]=$n[$y];
    $y--;
}
 for($i=0;$i<20;$i++){
     echo "N[".$i."] = ".$n2[$i]."\n";
 }


?>
