<?php

$str = trim(fgets(STDIN));
$vogais = array();

// pegar so vogais

for($i=0;$i<strlen($str);$i++){
    if($str[$i] == 'a' or $str[$i] == 'e' or $str[$i] == 'i' or $str[$i] == 'o' or $str[$i] == 'u'){
        $vogais[] = $str[$i];
    }
}

$inverso = array_reverse($vogais);
$igual =0;

for($i=0;$i<count($vogais);$i++){
    if($vogais[$i] == $inverso[$i]){
        $igual++;
    }
}

if($igual == count($vogais)){
    echo "S\n";
} else {echo "N\n";}


?>
