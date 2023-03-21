<?php

$temp = 0;
$t = readline();


for($i = 0; $i < $t; $i++){

$temp = 0;

$x = readline(); 
$x = explode(' ',$x);

$pa = (int)$x[0];
$pb = (int)$x[1];
$ga = (double)$x[2];
$gb = (double)$x[3];


while ($pa <= $pb)
{

  $pa += floor($pa*$ga/100);
  $pb += floor($pb*$gb/100);

  $temp++;

  if($temp > 100) {echo "Mais de 1 seculo.\n"; break;}

}

if ($temp <= 100){echo "$temp anos.\n";}


}


?>