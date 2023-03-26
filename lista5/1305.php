<?php


while ($num = fgets(STDIN)){


$num = $num;

if($num == "EOF"){
    break;
}

$cutoff = fgets(STDIN);

if($cutoff == "EOF"){
    break;
}

$numabs = abs($num);
$decimal = $num - floor($numabs);

if($decimal > $cutoff){
    echo ceil($num)."\n";
} else if ($decimal < $cutoff){
    echo floor($num)."\n";
}


}
?>