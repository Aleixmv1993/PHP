<?php 

	define('LONGI', 100);
	$array_aleatori=array();
	for($i=0; $i<LONGI;$i++){
		array_push($array_aleatori, rand(1,100));
	}

	function buscar_num($array_aleatori,$num){
		for($i=0;$i<count($array_aleatori);$i++){
			if($array_aleatori[$i]==$num){
				echo "Valor trobat a la posicio: ".$i."<br>";

			}
		}
	}
	$num=55;
	buscar_num($array_aleatori, $num);// s'ha de cridar sempre a la funció. Sino al no ser cridada funcione.

 ?>