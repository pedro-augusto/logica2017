<?php

	$numero1=0;
	$numero2=0;
	$sexo=0;

	for ($i=0; $i <10 ; $i++) { 
		print("Digite o sexo do atleta: 1 para meninas e 2 para meninos \n");
		$sexo= fgets(STDIN);

		if ($sexo==1) {
			$idademeninas= array ();
			print("Digite a idade \n");
			$idademeninas[]= fgets(STDIN);
			$numero1= $numero1+1;
		}

		if ($sexo==2) {
			$idademeninos= array ();
			print("Digite a idade \n");
			$idademeninos[]= fgets(STDIN);
			$numero2= $numero2+1;
		}

	}

	print("Há ".$numero1. "meninas e ".$numero2. "meninos \n");

  ?>