<?php

	$idades= array(15,22,1,0,99,45,788,52,9,52);

	$tamanho= sizeof($idades); //função que recebe um array e retorna o seu tamanho


	for ($i=0; $i < $tamanho; $i++) { 
		print($idades);
	}

	//FOREACH- PARA CADA ITEM
	//POSIÇÃO- REFERE-SE AO ÍNDICE
	//VALOR- REFERE-SE AO DADO ARMAZENADO

	foreach ($idades as $posicao=>$valor) { //array idade
		print($posicao." contém ".$valor."\n");
	}

	$pessoa= array("Nome"=>"Pedro Augusto",
					"Idade"=>"15 anos",
					"Matricula"=>"01052017",
					"Ano de Nascimento"=>"2001");

	$pessoa["peso"]=fgets(STDIN);
	foreach ($pessoa as $indice => $informacoes) {
		print("O/A ".$indice." é ".$informacoes."\n");
	}


	$nome= "Pedro";
	$vogal=0;

	for ($i=0; $i <strlen($nome) ; $i++) { 
		if ($nome[$i])=="a" or "e" or "i" or "u" {
			$vogal++;
		}
	}
	print($vogal);

  ?>