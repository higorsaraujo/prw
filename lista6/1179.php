<?php

$par = array();
$impar = array();
$xpar = 0;
$ximpar = 0;

for($i=0;$i<15;$i++){
    

        if(count($par) == 5){
            for($x=0;$x<5;$x++){
                echo "par[".$x."] = ".$par[$x]."\n";
            }
            unset($par);
            $par = array();
            $xpar = 0;
        }else if(count($impar) == 5){
            for($x=0;$x<5;$x++){
                echo "impar[".$x."] = ".$impar[$x]."\n";
            }
            unset($impar);
            $impar = array();
            $ximpar = 0;
        }
        
        $n = intval(trim(fgets(STDIN)));
        if($n % 2 == 0){
            $par[$xpar] = $n;
            $xpar++;
        } else if ($n % 2 != 0){
            $impar[$ximpar] = $n;
            $ximpar++;
        }
    
}

for($i=0;$i<$ximpar;$i++){
    echo "impar[".$i."] = ".$impar[$i]."\n";
}

for($i=0;$i<$xpar;$i++){
    echo "par[".$i."] = ".$par[$i]."\n";
}



?>
