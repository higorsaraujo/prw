<?php

while($s = trim(fgets(STDIN))){

    $especial = 0; //se tem espaco, caractere especial ou pontuacao
    $mai = 0;
    $min = 0;
    $num = 0;

    for($i=0;$i<strlen($s);$i++){
        $ascii = ord(substr($s, $i, 1));

        if($ascii >= 32 and $ascii <= 47 or $ascii >= 58 and $ascii <= 64 or $ascii >= 91 and $ascii <= 96 or $ascii >= 123 and $ascii <= 126) {$especial++;}
        else if ($ascii >= 65 and $ascii <= 90){$mai++;}
        else if($ascii >= 97 and $ascii <= 122){$min++;}
        else if($ascii >= 48 and $ascii <= 57){$num++;}

    }

    if (strlen($s) < 6 || strlen($s) > 32) {
        echo "Senha invalida.\n";
        continue;
    }

    if($especial==0 && $mai>0 or $min>0 && $num>0){
        echo "Senha valida.\n";
    } else {echo "Senha invalida.\n";}

}

?>