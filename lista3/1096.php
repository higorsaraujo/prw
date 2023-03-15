<?php

$i=1;
$j=7;
$x=1;

for($cont=1;$cont<=15;$cont++){
  echo "I=$i J=$j\n";

  $j--;
  
  if($cont % 3 == 0){
        $i += 2;
        $j = 7;
    }

}

?>
