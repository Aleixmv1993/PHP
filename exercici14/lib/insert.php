<?php 
	//connexio
	include 'config.php';

	$db=new mysqli($dbhost,$dbuser,$dbpass,$dbname);
	if($db->connect_errno){
		die('Error de connexió');
	}
	else{
		if($_POST){
		if($_POST['nom'] && !empty($_POST['nom']) 
			&& $_POST['cognoms'] && !empty($_POST['cognoms']) 
			&& $_POST['curs'] && !empty($_POST['curs']))
			{
				//es comprova cadascu dels camps
				//i es genera la SQL
				$SQL="INSERT INTO alumnes(nom,cognoms,curs) VALUES('$_REQUEST[nom]','$_REQUEST[cognoms]','$_REQUEST[curs]')";
				if(!$result=$db->query($SQL))
				{
					die("Error en insert");
				}
				$db->close();
				header('Location:../index.html');
			}
	}
}
	
	//executar consulta
	//si tot va be tonar a index.html
 ?>
<!DOCTYPE html>
<html lang="ca">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<header>
	</header>	
	<form method="POST" action="<?= $_SERVER['PHP_SELF'];?>">
	<p><label for="nom">NOM:<input type="text" name="nom"></label></p>
	<p><label for="cognom">COGNOM:<input type="text" name="cognoms"></label></p>
	<p><label for="curs">CURS: <br><input type="radio" name="curs" value="1SMIX"> 1SMIX <br>
							  <input type="radio" name="curs" value="2SMIX"> 2SMIX <br>
							  <input type="radio" name="curs" value="1DAW"> 1DAW <br>
							  <input type="radio" name="curs" value="2DAW"> 2DAW <br>

	</label></p>
	<P><input type="submit" value="Inserta"></P>
</form>
</body>
</html>