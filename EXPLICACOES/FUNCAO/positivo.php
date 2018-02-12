<?php

	print("\n");

	//FUNÇÃO PARA DESCOBRIR SE O NÚMERO É POSITIVO, NEGATIVO OU NULO

	function CondiçãoNumerica ($numero) {

		if ($numero > 0) {
			print("O número é positivo \n");
		}

		elseif ($numero ==0) {
			print("O número é zero \n");
		}

		else {
			print("O número é negativo \n");
		}

	}

	print("\n");
	print("Digite o número o qual você quer descobrir a condição numerica \n");

	$numero= fgets(STDIN);
	print("\n");
	
	CondiçãoNumerica ($numero);
	print("\n");

  ?>