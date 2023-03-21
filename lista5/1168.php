<?php

$dois = 0;
$tres = 0;
$cinco = 0;
$seis = 0;
$quatro = 0;
$sete = 0;

$x = readline();

for($i=0;$i<$x;$i++){
    $t = readline();

    $led = 0;
    $dois = 0;
    $tres = 0;
    $cinco = 0;
    $seis = 0;
    $quatro = 0;
    $sete = 0;


    for($y=0;$y<strlen($t);$y++){
        if($t[$y] == "2" || $t[$y] == "3" || $t[$y] == "5"){
            $cinco++;
        } else if($t[$y] == "0" || $t[$y] == "9" || $t[$y] == "6"){
            $seis++;
        } else if($t[$y] == "1"){
            $dois++;
        } else if($t[$y] == "7"){
            $tres++;
        } else if($t[$y] == "4"){
            $quatro++;
        } else if($t[$y] == "8"){
            $sete++;
        }
    }

    $led = ($cinco*5)+($seis*6)+($dois*2)+($tres*3)+($quatro*4)+($sete*7);

    echo $led." leds\n";
    
  
}

?>
