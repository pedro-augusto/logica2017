<?php

	print("\n");

	$contador=0;
	$soma= 0;

	while ($contador < 10) {
		print("Informe um número");
		$numero= fgets(STDIN);
		$soma= $soma + $numero;

		$contador++;
	}

	print("\n");

	print("O número de números lidos é $contador");
	print("A soma dos números é $soma");

	print("\n");


?>