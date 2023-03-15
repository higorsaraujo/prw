<?php

   foreach(array(0,1,2,3,4,5) as $val){
    $a[$val] = readline();
   }

   $count = 0;
   $soma = 0;

   foreach(array(0,1,2,3,4,5) as $val){
    if($a[$val] > 0 ){
        $count++;
        $soma += $a[$val];
    }
   }

   $media = $soma / $count;
   $media = number_format($media,1,".","");


    echo "$count valores positivos\n";
    echo "$media\n";


?>