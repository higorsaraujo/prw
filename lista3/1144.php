<?php
    $n = readline();

    $a = 1; 
    $b = 1;
    $c = 1;

    $x = 2;

    for($i = 1; $i <= $n*2; $i++ ){
        echo "$a $b $c\n";

        if($i % 2 == 0){
            $a++;
            $b = pow($x,2);
            $c = pow($x,3);
            $x++;
        } else{
            $b++;
            $c++;
        }
    }
?>