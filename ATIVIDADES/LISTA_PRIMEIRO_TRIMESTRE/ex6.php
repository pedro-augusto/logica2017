<?php 

	$metros= 0;
	$litros= 0;
	$latas= 0;
	$valor= 0;


	print("\n");
	print("Digite o número de metros quadrados da área que você quer pintar \n");

	$metros= fgets(STDIN);


	$litros= $metros /3;

	print("\n");
	print("Serão necessários " .number_format($litros,2)." litros de tinta. \n");
	print("\n");

	$latas= $litros /18;

	$valor= $latas *80;

	print("\n");
	print("".number_format($latas,2)." latas deverão ser compradas e, portanto, o valor será de ".number_format($valor,2)." reais. \n");
	print("\n");

	print("Obrigado!");
	print("\n");

?>