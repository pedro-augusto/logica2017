<?php

	for ($linhas=1; $linhas <= 5 ; $linhas++) { //AQUI CRIAMOS UM FOR PARA O NÚMERO DE LINHAS
		
		for ($colunas=1; $colunas <= 5; $colunas++) { //AQUI CRIAMOS UM FOR PARA O NÚMERO DE COLUNAS

			if ($linhas==$colunas) {
				print(" * ");

			}

			else {
				print("  ");
			}	

		}

		print("\n");
	}

  ?>