<?php

	print("\n");
	for ($linhas=1; $linhas <= 7 ; $linhas++) { 

		for ($colunas=1; $colunas <= 5; $colunas++) { 

			if ($linhas==4 or $colunas==1 or $colunas==5) {
				print(" * ");
			}

			else {
				print("   ");
			}

		}
		print("\n");
	}
	print("\n");
?>