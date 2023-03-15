<?php
    
    $soma = 0;
    
    for($i=0;$i<5;$i++){
        $n = readline();

        if ($n % 2 == 0){
            $soma++;
        }

       }
        
        echo $soma." valores pares";

?>