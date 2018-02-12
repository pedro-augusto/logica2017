<?php

	print("Informe o valor de segundos \n");
	$total = fgets (STDIN); //TOTAL

	$horas = floor($total / 3600); //HORAS
	print("\n".$horas."\n");


	$aux = $total % 3600; //AUXILIAR  PARA OS MINUTOS


	$minutos = floor($aux / 60); //MINUTOS
	print("\n".$minutos."\n");


	$segundos = $aux % 60; //SEGUNDOS
	print("\n".$segundos."\n");


?>