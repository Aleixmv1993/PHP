<?php
	$nom=$_POST['nom'];// la part de $_POST[''] es que entre cometes posem el nom exacte del formulari.
	$salari=$_POST['salari'];

	if (isset($_POST) && !empty($_POST)){
	if (isset($_POST['nom']) && !empty($_POST['nom'])){
		$nom=$_POST['nom'];//tenim que posar el nom exacte del name dels inputs.
	}
	if (isset($_POST['salari']) && !empty($_POST['salari'])){
		$salari=$_POST['salari'];
	}}


	if($salari == 3){
		echo 'Has de pagar impostos senyor: '.$nom;
	}else{
		echo 'Ets lliure de pagar impostos '.$nom;
	}

?>