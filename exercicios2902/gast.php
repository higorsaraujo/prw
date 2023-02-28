<?php

$hr = readline();
$vel = readline();
$dis = $hr * $vel;

$kml = $dis / 12;
$kml = number_format($kml, 3, ".","");


echo "$kml\n";
?>