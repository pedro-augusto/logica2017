<?php

	$kg= 0;
	$excedente= 0;
	$multa= 0;

	print("\n");
	print("Digite o valor de kg do peixe pescado \n");
	$kg= fgets(STDIN);
	print("\n");

	if ($kg > 50) {
		$excedente= $kg- 50;
		print("O excedente é de $excedente kg(s) e sendo assim:");
		$multa= $excedente *4;
		print("\n");
		print("O valor da multa é de $multa reais \n");
		print("\n");
	}

	else {
		print("\n");
		print("Você não pagará multa, ou seja, a multa é de $multa reais. \n");
		print("\n");
	}

	print("Obrigado! \n");
	print("\n");

?>