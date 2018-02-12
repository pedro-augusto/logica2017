<?php

	for ($equipe=1; $equipe <= 5; $equipe++) { 
		print("\n");
		print("\n");
		print("O cadastro a seguir corresponde a equipe $equipe! \n");
		print("\n");
		print("\n");

		for ($atleta=1; $atleta <= 6; $atleta++) { 
			print("Informe o nome do atleta $atleta da equipe $equipe \n");
			$nome= fgets(STDIN);
			print("\n");

			print("Informe a aultura do atleta $atleta da equipe $equipe \n");
			$altura= fgets(STDIN);
			print("\n");
		}
	}





 ?>