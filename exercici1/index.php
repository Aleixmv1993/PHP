<!--/**
*
*
*
**/-->
<?php
	//Guardem a una variable anomenada $d el valor del dia del mes. 
 	$d=date('d');
 	if($d>10){
 		$msg='La pagina no esta disponible ja que es un dia superior al numero 10';
 	}else{
 		$msg='La pagin a esta disponible';
 	}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="../estils/main.css">
</head>
<body>
	<?=$msg;?>
</body>
</html>