<?php


$n = readline();
$i = 0;

for($i>0;$i<=$n;$i++){
    $numero = readline();
    
    if(strlen($numero)!= 5){
        if($numero[0] == 'o' && $numero[1] == 'n' || $numero[1] == 'n' && $numero[2] == 'e' || $numero[0] == 'o' && $numero[2] == 'e'){
            echo "1\n";
        }	else if ($numero[0] == 't' && $numero[1] == 'w' || $numero[1] == 'w' && $numero[2] == 'o' || $numero[0] == 't' && $numero[2] == 'o'){
            echo "2\n";
        }
        
        }	else{
            echo "3\n";
        }
    }
?>