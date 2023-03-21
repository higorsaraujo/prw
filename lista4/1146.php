<?php

while(true){
    
    $string = null;
    $n = readline();

    if($n == 0){
        break;
    }

    for($x = 1; $x <= $n; $x++){
        $string = $string."$x";
        
        if($x != $n){
            $string = $string." ";
        } else {$string = $string."\n";}
    }

    echo "$string";


}

?>