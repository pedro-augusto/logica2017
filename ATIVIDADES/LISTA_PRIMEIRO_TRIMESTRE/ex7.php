<?php

	$area= 0;
	$litros= 0;
	$escolha= 0;
	$latas= 0;
	$preço= 0;
	$preco1= 0;
	$preco2= 0;
	$sobra= 0;
	$galao= 0;
	$totalpreco= 0; 


	print("\n");
	print("Informe quantos metros quadrados tem a área que será pintada \n");
	$area= fgets(STDIN);

	$litros = $area /6;
	print("Serão necessários " .number_format($litros,2). " litros. \n");

	print("Escolha a opção: 1- apenas latas de 18 litros; 2- apenas latas de 3,6 litros; 3- misturar os galões \n");

	$escolha= fgets(STDIN);

	if ($escolha==1) {
		$latas= $litros /18;
		$preco= $latas * 80;
		print("O valor pago será de ".number_format($preco,2). " reais \n");
	}

	elseif ($escolha==2) {
		$latas= $litros / 3.6;
		$preco= $latas * 25;
		print("O valor pago será de ".number_format($preco,2). " reais \n");
	}

	elseif ($escolha==3) {

		$litros= $litros * 1.1;

			if ($litros >= 18) {
				$latas= $litros/18;
				$latas= ceil ($latas);
				$preco1= $latas*80;

				$sobra= $litros % 18;
				$galao= $sobra / 3.6;
				$galao= ceil($galao);
				$preco2= $galao * 25;
				$totalpreco= $preco1 + $preco2;
				print("Serão utilizados $latas latas e $galao galões \n");
				print("O total é $total".number_format($totalpreco,2). " reais \n");

			} else {
				$galao= $litros / 3.6;
				$galao= ceil($galao);
				$preco2= $galao * 25;
				print("É mais benéfico comprar apenas galões de tinta, sendo assim você vai precisar de $galao galões e o preço será ".number_format($preco2)." reais \n" );

			}

	} else {
		print("Recomece o programa, o valor digitado não corresponde a nenhuma opção! \n");
	}

	print("Obrigado! \n");
?>