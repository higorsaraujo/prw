<?php

$x = readline();

for($i = 0; $i < $x; $i++){
    $val = readline();

    if($val == 0){$a[$i] = "NULL";}
        else{
            if($val % 2 == 0){$a[$i] = "EVEN";} 
                else {$a[$i] = "ODD";}
            if($val > 0) {$a[$i] = $a[$i] . " POSITIVE";}
                else{$a[$i] = $a[$i] . " NEGATIVE";}  
   
}
}

for($i = 0; $i < $x; $i++){
    echo ($a[$i])."\n";
}



?>
