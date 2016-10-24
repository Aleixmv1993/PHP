<?php 
	$String1 = "Aquest es el string numero 1.";
	$String2 = "Aquest es el string numero 2.";
	$String3 = "Aquest es el ultim String(num 3)";

	$num= rand(1,3);

	if($num == 3){
	echo $String3;
	}else{
		echo 'El numero aleatori es el '.$num;
	}
	
 ?>