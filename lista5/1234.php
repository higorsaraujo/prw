<?php

while(true){
    
    $str = readline();

    $str1 = '';
    $upper = true;

    for($i=0;$i<strlen($str);$i++){
        if($str[$i] == " "){
            $str1 = $str1." ";
        } else{

         if ($upper == true){
            $str1 = $str1. strtoupper($str[$i]);
        } else if ($upper != true){
            $str1 = $str1. strtolower($str[$i]);
        }

        $upper = !$upper;

    }

    }

    echo $str1. "\n";

}

?>
