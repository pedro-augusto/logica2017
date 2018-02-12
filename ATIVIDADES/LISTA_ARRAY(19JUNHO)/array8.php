<?php 


	$aux= 0;
	$idades= array(27,10,56,8,6,99,150,20,31,84);

	for ($numeros=0; $numeros < 10 ; $numeros++) { ///// CRIA-SE UM FOR QUE REPRESENTA OS DEZ NÚMEROS

		for ($verificacao=0; $verificacao < 10; $verificacao++) { ///// CRIA-SE UM OUTRO FOR QUE FUNCIONARÁ PARA VERIFICAR CADA NÚMERO COM OS OUTROS
		
			if ($idades[$numeros] < $idades[$verificacao]) { ///// SE O NÚMERO FOR MENOR QUE O NÚMERO DA VERIFICAÇÃO

				$aux= $idades[$verificacao]; //// AUXILIAR RECEBE A MAIOR POSIÇÃO

				$idades[$verificacao]= $idades[$numeros]; //// O NÚMERO DA VERIFICAÇÃO É TROCADO COM O NÚMERO DO FOR NO QUAL A VERIFICAÇÃO ESTÁ SENDO REALIZADA EM SI

				$idades[$numeros]= $aux; //// O NÚMERO DO FOR NO QUAL A VERIFICAÇÃO ESTÁ SENDO REALIZADA EM SI RECEBE A MAIOR POSIÇÃO
			}
		}
	}
	
	print("\n");
	print("A ordem dos números do array é: \n");
	print("\n");

	for ($mostrador=0; $mostrador < 10; $mostrador++) { 
		print("* ".$idades[$mostrador]."\n");
	}

 ?>