<?php 

$a = readline(); 
$a = explode(' ',$a);

$x = (double)$a[0];
$y = (double)$a[1];

if($x > 0 and $y > 0) {echo "Q1\n";}
else if($x < 0 and $y > 0) {echo "Q2\n";}
else if($x > 0 and $y > 0) {echo "Q3\n";}
else if($x > 0 and $y < 0) {echo "Q4\n";}
else if($x == 0) {echo "Eixo Y\n";}
else if($y == 0) {echo "Eixo X\n";}
else if($y == 0 and $x == 0) {echo "Origem\n";}

?>