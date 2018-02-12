<?php

	$pergunta= "S";
	$equipe=1;
	$somamedia=0;
	$somaaltura=0;

	$mediafinal=0;

	while ($pergunta == "S") {
		$mediatime=0;
		for ($atleta=1; $atleta <= 6; $atleta++) { 
			print("\n");
			print("Informe o nome do atleta $atleta da equipe $equipe \n");
			$nome= fgets(STDIN);
			print("\n");

			print("Informe a altura do atleta $atleta da equipe $equipe em metros \n");
			$altura= fgets(STDIN);
			print("\n");

			$somaaltura= $somaaltura + $altura;

		}

		$mediatime= $somaaltura /6;
		$somamedia= $somamedia + $mediatime;

		$equipe++;

		print("A média de altura da equipe $equipe é de ".number_format($mediatime,2)." \n");
		print("Deseja cadastrar mais uma equipe? \n");
		$pergunta= trim(fgets(STDIN));
	}

	$mediafinal= $somamedia / $equipe;

	print("A média de altura de todas as equipes é ".number_format($mediafinal,2)." metros\n");

	print("Obrigado por usar este programa \n");


 ?>