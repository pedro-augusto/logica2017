<?php

	$idade= array(18,90,15,89,47);


	for ($i=0; $i <= 4 ; $i++) { 

		if($i==0) { 

		//FAZEMOS ISTO POIS PRECISAMOS DE UM PARÂMETRO PARA INICIAR AS COMPARAÇÕES E, SE COLOCARMOS UM NÚMERO PRÉ DEFINIDO, POR EXEMPLO 0 COMO O MENOR NÚMERO, E HOUVER UM -1 NO ARRAY, OS RESULTADOS NÃO SERIAM SATISFATÓRIOS.

			$maior= $idade[$i];
			$menor= $idade[$i];
		}

		if ($idade[$i]>$maior) {
			$maior= $idade[$i];
		}

		if ($idade[$i]<$menor) {
			$menor= $idade[$i];
		}
	}

	print("A maior idade é ".$maior."\n");
	print("A menor idade é ".$menor."\n");

  ?>