<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<form method="POST" action="acc.php">
		<p>Nom: <input type="text" name="nom"></p>
		<p>Salari <select name="salari">
		<option value="1">1-1000€</option>
		<option value="2">1001€-3000€</option>
		<option value="3">+3000€</option>			
		</select></p>
		<p><input type="submit" value="Enviar"></p>
	</form>
	
</body>
</html>