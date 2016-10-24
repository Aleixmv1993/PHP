<?php
include 'config.php';

	$db=new mysqli($dbhost,$dbuser,$dbpass,$dbname);
	if($db->connect_errno){//comproba si hi ha un error a la connexio
		die('Error de connexio');
	}else{
	$sql="Select * from alumnes";

	//mostrar resultat

	$result=$db->query($sql);

	while($rows=$result->fetch_array()){
		echo $rows['Nom'].' '.$rows['Cognoms'].' '.$rows['Curs'].'<br>';
	}

	}

	//tancar connexió

	$db->close();

?>