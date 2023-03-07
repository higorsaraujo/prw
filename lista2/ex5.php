<?php

$x = readline(); 
$x = explode(' ',$x);

$a = (double)$x[0];
$b = (double)$x[1];
$c = (double)$x[2];
$d = (double)$x[3];


$media = (($a*2) + ($b*3) + ($c*4) + ($d*1))/ 10;
$media = number_format($media, 1, ".","");

echo "Media: $media\n";

if($media >= 7.0 or $media < 5) {
    if ($media >= 7.0) {echo "Aluno aprovado.\n";}
    else if ($media < 5) {echo "Aluno reprovado.\n";}
} else {
    echo "Aluno em exame.\n";
    $n2 = readline();
    echo "Nota do exame: $n2\n";

    $media2 = ($media + $n2)/2;
    
    if($media2 >= 5.0){
        echo "Aluno aprovado.\n";
        $media2 = number_format($media2, 1, ".","");
        echo "Media final: $media2\n";
    } else if ($media < 5) {
        echo "Aluno reprovado.\n";
        $media2 = number_format($media2, 1, ".","");
        echo "Media final: $media2\n";
    }
}
?>
