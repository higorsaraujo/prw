<?php


$cont = readline();


for($x=0;$x<$cont;$x++){


$n=intval(trim(fgets(STDIN)));

$n1 = 0;
$n2 = 1;

$vet = array();

$vet[0] = $n1;
$vet[1] = $n2;


for($i=2 ; $i<=$n ; $i++){
    $vet[$i] = $n1 + $n2;
    
    $n1 = $n2;
    $n2 = $vet[$i];
   }
   
echo "Fib(".$n.") = ". $vet[$n]."\n";

}
   

?>
