<?php

	$nomes= array();
	print("\n");

	for ($i=0; $i < 5; $i++) { 
		print("Digite um nome \n");
		$nomes[$i]= fgets(STDIN);
		print("\n");
	}

	print("\n");
	print("Os nomes digitados são: \n");
	print("\n");
	
	for ($b=0; $b < 5; $b++) { 
		print($nomes[$b]);
		print("\n");
	}

  ?>
