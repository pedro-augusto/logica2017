<?php 
	print ("\n");

	print ("Informe o valor do produto \n");
	$valor = fgets(STDIN);
	print ("\n");

	print ("Escolha a sua opção de pagamento: 1, 2, 3 ou 4 \n");
	$opcao = fgets(STDIN);
	print ("\n");


	if ($opcao == 1) {
		$desc = $valor * 0.1;
		$final = $valor - $desc;
		$parc = 1;
		print ("\n");
		print ("O valor final da compra é $final e o número de parcelas é $parc \n");
		print ("\n");
	}



	else if ($opcao == 2) {
		$final = $valor * 0.95;
		$parc = 1;
		print ("\n");
		print ("O valor final da compra é $final e o número de parcelas é $parc \n");
		print ("\n");
	}



	else if ($opcao == 3) {
		$final = $valor /2;
		$parc = 2;	
		print ("\n");
		print ("O valor final da compra é $final e o número de parcelas é $parc \n");
		print ("\n");
	}



	else if ($opcao == 4) {
		$final = ($valor * 1.1) /3;
		$parc = 3;
		print ("\n");
		print ("O valor final da compra é $final e o número de parcelas é $parc \n");
	}




	else ( print "DIGITE UMA NOVA OPÇÃO");
	print ("\n");

	print ("Obrigado! \n");
	print ("\n");
	print ("\n");
?>
