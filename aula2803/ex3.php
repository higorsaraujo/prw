<?php

$alunos = array("Murilo", "Cassio", "Ricardo", "Joao");
print_r($alunos); // imprime todos os elementos do vetor
echo "<br>";

//unset remove elemento de uma determinada posicao
unset($alunos[1]);
print_r($alunos);
echo "<br>";

//array_values reestabelece os indices
$alunos = array_values($alunos);
print_r($alunos);
echo "<br>";

?>