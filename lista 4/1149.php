<?php


$x = readline(); 
$x = explode(' ',$x);

$a = (int)$x[0];

while (true){
    $b = (int)$x[1];

    if($b > 0){
        break;
    }
}

$y = 0;

for ($i = 0; $i < $b; $i++){
    $y +=($a + $i);
}

echo "$y\n";

?>
