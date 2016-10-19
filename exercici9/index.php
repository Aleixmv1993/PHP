<?php 
	$directori="fotos";

	if(is_dir($directori)){
		if($hand=opendir($directori)){
			while ($file=readdir($hand) != false) {
				echo $file.'<br>';
			}
			closedir();
		}
	}

 ?>