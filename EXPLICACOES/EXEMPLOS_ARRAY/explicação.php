<?php


	/* Array- Variável complexa, cabem mais dados (várias posições);

	Valor textual tem que estar entre aspas

	Um array é indexado quando os índices são númericos(começando em zero)

	*/

	$idades= array(18,25,65,47);

	foreach ($idades as $chave => $item) {
		print($chave."exibindo".$item."\n");
	}

	$idades= array(
			"Eduarda" => 17,
			"Pedro" => 18,
			"Julia" => 1,
			"Jesus" => 27,
			"Speroni" => 3
			);

	print("Informe o seu nome");
	$nome=fgets(STDIN);

	print("Informe a sua idade");
	$idade= fgets(STDIN);

	$idades [$nome]= $idade;

	foreach ($idades as $aluno => $idade) {
		print($aluno."tem".$idade."anos \n");
	}
