<?php

	$a= array();
	$a= array(1,2,3,4,5,-1,-2);

	for ($i=0; $i < 7; $i++) { 

		print($a [$i]);

		if ($a[$i] > 0) {

			print("Positivo \n");
		} else {
			print("Negativo \n");
		}
	}


 ?>