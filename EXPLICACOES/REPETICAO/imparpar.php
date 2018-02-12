<?php

	print("\n");

	$contador = 0;
	$par = 0;
	$impar= 0;
	$somapar= 0;
	
	print("Informe o número de números que vão ser lidos \n");
	$lidas = fgets (STDIN);

	print("\n");


	while ( $contador < $lidas) {

		print("Informe o número \n");
		$numero = fgets (STDIN);

			if ($numero % 2 == 0) {
				$par= $par + 1;
				$somapar = $somapar + $numero;
			}

			else 
				$impar = $impar +  1;


		print("Há $impar impares e $par pares \n");
		$contador++;
	}

	print("\n");

	$media = $somapar / $par;
	print("A média dos números pares é $media \n");

	print("\n");


?>