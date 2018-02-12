<?php

	print("\n");
	for ($linhas=1; $linhas <= 7 ; $linhas++) { 

		for ($colunas=1; $colunas <= 5; $colunas++) { 

			if ($linhas==7 or $colunas==1) {
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