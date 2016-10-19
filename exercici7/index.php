 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 	<link rel="stylesheet" type="text/css" href="../estils/main.css">
 </head>
 <body>
 	<?php 
	// la seguent funció es per comprobar si un numero es parell o no, retorna un true quan ho es i un false quan no.
function is_par($num){
	if($num % 2 ==0){
		return true;
	}else{ return false;}
}
define('Tam', 10); //define es per definir una variable i sempre tingui aquest valor.
function taula($num){
	echo "<table>";
	for($i=1;$i < 11; $i++){
		$result = $i * $num;
		if(is_par($i) == true)
			{echo "<tr><td class=\"par\">Multiplicar ".$i." per ".$num." es igual a ".$result."</td></tr>";
			//die(); Serveix per comprovar si mostra algo dins un bucle, perque para directamente el proces.
		}
		else{
			echo "<tr><td class=\"impar\">Multiplicar ".$i." per ".$num." es igual a ".$result."</td></tr>";
		}
	}
	echo "</table>";
}
taula(Tam);
 ?>
 </body>
 </html>