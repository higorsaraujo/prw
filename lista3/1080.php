<?php

  	
$i = 0;


for($i>=0;$i<=99;$i++){
      $valor[$i] = readline();
}

$i=0;

for($i>=0;$i<=99;$i++){
    if(($valor[$i] - $maior) > 0){
        $maior=$valor[$i];
        $posicao=$i+1;
    }
}

    echo "$maior\n";
    echo "$posicao\n";

?>