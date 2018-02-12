<?php

	$contador= 0;
	$maior= 0;
	$menor= 10000000000;


	while ($contador < 20) {

		print("\n");
		print("Informe um número \n");
		$n= trim(fgets(STDIN));

		if ($n > $maior) {
			$maior= $n;
		}

		else {
			if ($n < $menor) {
				$menor= $n;
			}
		}

		$contador++;		
	}
	
	print("\n");
	print("\n");
	print("O menor número é $menor \n");
	print("\n");

	print("\n");
	print("O maior número é $maior \n");
	print("\n");

?>