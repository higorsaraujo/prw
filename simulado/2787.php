<?php

$i1 = readline();
$j1 = readline();


$m = array();

for($i=0;$i<$i1;$i++){
    for($j=0;$j<$j1;$j++){
        if(($i + $j) % 2 == 0){
            $m[$i][$j] = 1;
        } else if (($i + $j) % 2 != 0){
            $m [$i][$j] = 0;
        }
    }
}


echo $m[$i1 - 1][$j1 - 1]."\n";


?>
