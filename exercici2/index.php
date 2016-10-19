<?php

	$num= rand(1,100);


	if($num > 50)
	{
		echo 'El numero '.$num.' es mes gran a 50';
	}else if($num == 50)
	{
		echo 'El numero es 50';
	}else
	{
		echo 'El numero '.$num.' es mes petit a 50';
	}

?>