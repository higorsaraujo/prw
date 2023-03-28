<?php

$alunos = array("Murilo", "Cassio", "Ricardo", "Joao");
echo "Quantidade de elementos: .".count($alunos)."<br>";
echo "<hr>";
rsort($alunos); // ordena valor 

for($x = 0; $x < count($alunos); $x++){
    echo "Aluno na posição $x: ".$alunos[$x]."<br>";
    echo "quantiade de caracteres: ".strlen($alunos[$x]."<br>");
    echo "<hr>";
}

$indice = array_search("Joao", $alunos);
if($indice === false){
    echo "Elemento nao encontrado <br>";
} else {
    echo "Elemento entrado na posição $indice <br>";
}

?>