<?php

   foreach(array(0,1,2,3,4,5) as $val){
    $a[$val] = readline();
   }

   $count = 0;

   foreach(array(0,1,2,3,4,5) as $val){
    if($a[$val] < 0 ){
        $count++;
    }
   }

    echo "$count valores positivos\n";


?>
