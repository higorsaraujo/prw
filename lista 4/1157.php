<?php

$n = readline();

for($x = 1; $x <= $n; $x++){
    if($n % $x == 0){
        echo "$x\n";
    }
}

?>
