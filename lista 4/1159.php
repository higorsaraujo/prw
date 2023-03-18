<?php

$soma=0;
$x = 0;
    
while($x = readline()){
    
    
    
    if($x==0){
        break;
    }
    
    if($x<0){
        
    $x=$x*-1;
    
        if($x%2 == 1){
        $x= $x - 1;
    }
    
    for($i=0;$i<5;$i++){
        $soma = $soma + $x;
        $x=$x-2;
    }
    
    $soma=$soma*-1;
    } else {
    if($x%2 == 1){
        $x= $x + 1;
    }
    
    for($i=0;$i<5;$i++){
        $soma = $soma + $x;
        $x=$x+2;
    }}
    
    
    
    echo "$soma\n";
    
    $x=0;
    $soma=0;

}
    
    


?>
