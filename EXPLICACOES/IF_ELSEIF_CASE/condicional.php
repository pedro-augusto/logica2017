<?php 

	print("Informe o valor do produto");
	$valor = fgets (STDIN);

	print("Informa a opção de pagamento (1,2,3 ou 4):");
	$opcao = fgets (STDIN);

	if ($opcao == 1) {
		$desc = $valor * 0.1;
		$final = $valor - $desc;
		print ("o valor final é number_format($final,2)");


	}else{

		if ($opcao == 2) {

			$desc = $valor * 0.05;
			$final = $valor - $desc;
			print ("o valor final é ".number_format($final,2)."\n");
		}else {
			if ($opcao == 3){
				$parc = $valor / 2;
				print ("o valor da parcela é number_format($parc,2)");

			}else {
				if ($opcao == 4){
					$parc = ($valor + 0.1.$valor)/3;
					print ("o valor da percela é number_format($parc,2)");

				}else {
					print ("digite novamente a opção");
				}
			}
		}
	}	
			



?>