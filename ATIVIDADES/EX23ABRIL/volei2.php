<?php

	$pergunta= "S";
	$equipe=1;

	while ($pergunta == "S") {

		for ($atleta=1; $atleta <= 6; $atleta++) { 
			print("\n");
			print("Informe o nome do atleta $atleta da equipe $equipe \n");
			$nome= fgets(STDIN);
			print("\n");

			print("Informe a altura do atleta $atleta da equipe $equipe \n");
			$altura= fgets(STDIN);
			print("\n");

		}

		$equipe++;

		print("Deseja cadastrar mais uma equipe? \n");
		$pergunta= trim(fgets(STDIN));
	}

	print("Obrigado por usar este programa \n");

 ?>