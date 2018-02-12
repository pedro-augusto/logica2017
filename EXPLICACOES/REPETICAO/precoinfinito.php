<?php

	$contador = 1;
	$total = 0;
	while ($contador <= 10) {
	print ("Informe o preço do produto \n");
	$preco = fgets (STDIN);
	$total = $total + $preco;
	$contador = $contador + 1;
	}

	print ("O total é ". $total. "\n");


?>