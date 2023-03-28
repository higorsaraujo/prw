<?php

$a = array();

for($i = 0; $i < 100; $i++){
    $a[$i] = doubleval(trim(fgets(STDIN)));
}

for($i = 0; $i < 100; $i++){
    if($a[$i] <= 10){
        $a[$i] = number_format($a[$i],1,".","");
        echo "A[" . $i . "] = " . $a[$i] . PHP_EOL;
    }
}


?>
