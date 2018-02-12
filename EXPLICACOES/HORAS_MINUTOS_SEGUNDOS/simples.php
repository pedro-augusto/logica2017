<?php

	print("Informe o valor de segundos");
	$total = fgets (STDIN); //TOTAL

	$horas = (int)$total / 3600; 

	$minutos = $horas % 3600;

	$segundos = $minutos % 60;
?>