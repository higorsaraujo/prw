<?php

$i=0;
$j=1;
$x=0;
while(true){

    if($i==2 && $x==2){
        break;
    }
    
    echo "I=$i J=$j\n";

    $x++;
    $j++;

    if($x==2){
        $i+=0.2;
        $j=1.2;
    }
}

?>
