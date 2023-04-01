<?php

$x = doubleval(trim(fgets(STDIN)));

$n = array($x);

for($i=1;$i<100;$i++){
    
    $n[$i] = $n[$i-1]/2;
}

for($i=0;$i<100;$i++){
    $n[$i] = number_format($n[$i],4,".","");
    echo "N[".$i."] = ".$n[$i]."\n";
}


?>
