<?php
 
 	
 	$x = readline();

 	
 	
 	for($y=0;$y<$x;$y++){
	 
 	
 	$pal = readline();
 	
 	$meio = strlen($pal)/2;
 	
 	for( $i = $meio; $i>=1;$i--){
 		echo $pal[$i-1];
	 }
	 
	 for($i = strlen($pal);$i>$meio;$i--){
	 	echo $pal[$i-1];
	 }
	 
	 
	echo "\n";
}


?>