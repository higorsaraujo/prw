<?php

$str = readline();


// analisa se e letra ou nn
for($i=0;$i<strlen($str);$i++){
    $code = ord(substr($str, $i, 1));

    if(($code >= 65 && $code <= 90) || ($code >= 97 && $code <= 122)){
        echo substr($str,$i,1)."\n"; }
}


function charCodeAt($str, $i){
    return ord(substr($str, $i, 1));
  }

function letra_ou_nn($str, $i){
    $code = charCodeAt($str,$i);

    if(($code >= 65 && $code <= 90) || ($code >= 97 && $code <= 122)){
        return true;
    } else {return false;}
}




?>
