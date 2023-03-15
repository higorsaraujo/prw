<?php

$x = readline();
$y = readline();

if($x > $y){
    for($y = $y+1; $y <$x;$y++){
        if($y % 5 == 2 || $y % 5 == 3){
            echo $y."\n";
        }
    }
} else if($x < $y){
    for($x = $x+1; $x <$y;$x++){
        if($x % 5 == 2 || $x % 5 == 3){
            echo $x."\n";
        }
    }
} 

?>