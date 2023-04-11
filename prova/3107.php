<?php

$vm = readline(); // km/h
$dis = readline(); // km
$cm = readline(); // km/l

$temp = $dis / $vm;
$temp = number_format($temp,2,'.','');
$tot = $dis/$cm;
$tot = number_format($tot,2,'.','');

echo "Total horas: $temp\n";
echo "Total combustivel: $tot\n";

?>