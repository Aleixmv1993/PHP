<?php
	$nom=$_POST['nom'];// la part de $_POST[''] es que entre cometes posem el nom exacte del formulari.
	$edad=$_POST['edad'];

	if (isset($_POST) && !empty($_POST)){
	if (isset($_POST['nom']) && !empty($_POST['nom'])){
		$nom=$_POST['nom'];//tenim que posar el nom exacte del name dels inputs.
	}
	if (isset($_POST['edad']) && !empty($_POST['edad'])){
		$edad=$_POST['edad'];
	}}


	if($edad >= 18){
		echo 'Ets major de edad senyor: '.$nom;
	}else{
		echo 'Encara ets un nen! '.$nom;
	}

?>