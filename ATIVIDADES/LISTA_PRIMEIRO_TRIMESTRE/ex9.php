<?php

	$grao= 1;
	print("\n");
	print("O pagamento total por quadrado do tabuleiro é: \n");
	print("\n");

	print("O quadrado 1 do tabuleiro tem 1 grão \n");

	for ($i=2; $i <= 64; $i++) { 
		$grao= $grao * 2;
		print("O quadrado $i do tabuleiro tem $grao grãos \n");
	}

?>