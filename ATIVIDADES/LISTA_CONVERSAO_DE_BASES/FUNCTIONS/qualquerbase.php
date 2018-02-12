<?php

	//Qualquer Base para decimal

	function QualDec ($base, $numero) {

		$digito= 0;
		$resultado= 0;
		$invertido= strrev($numero);

		for ($i=0; $i < strlen($numero); $i++) { 
			
			$digito=$invertido [$i] * pow($base, $i);

			$resultado= $resultado + $digito;

		}

		return $resultado;

	}

?>