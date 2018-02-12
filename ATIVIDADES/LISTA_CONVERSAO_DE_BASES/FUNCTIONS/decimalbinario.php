<?php
function Decin($decimal){
	//o $numerodecimal tem que ser dividido por 2 por quantas vezes for possível.

	$restos = "";

	do{
		$resto = $decimal % 2;
		$decimal = intdiv($decimal, 2);
		$restos = $resto . $restos;
	}while($decimal>1);
	$restos = $decimal . $restos;

	return $restos;
}
?>