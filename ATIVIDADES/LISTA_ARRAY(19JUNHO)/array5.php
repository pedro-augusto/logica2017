<?php

	$nome= array("Jurema","Adalberto","Edvige","Desamer","Mcdonaldson");
	$idade= array(14,90,15,89,47);


	for ($i=0; $i <= 4 ; $i++) { 

		if($i==0) {

	//NOVAMENTE ESTABELECEMOS O MAIOR E O MENOR COMO A PRIMEIRA POSIÇÃO, COMO NO EXERCÍCIO 4. ENTRETANTO, AGORA, PRECISAMOS ARMAZENAR TAMBÉM OS NOMES, POR ISSO


			//MAIOR
			$maior= $idade[$i];
			$nomemaior= $nome[$i]; // VÁRIÁVEL PARA O NOME DA PESSOA COM A MAIOR IDADE
			

			//MENOR
			$menor= $idade[$i];
			$nomemenor= $nome[$i]; //VARIÁVEL PARA O NOME DA PESSOA COM A MENOR IDADE

		}


		if ($idade[$i]>$maior) {
			$maior= $idade[$i];
			$nomemaior= $nome[$i];
		}

		if ($idade[$i]<$menor) {
			$menor= $idade[$i];
			$nomemenor= $nome[$i];
		}
	}


	print("\n");
	print($nomemaior." tem a maior idade, que é de ".$maior." anos \n");
	print($nomemenor." tem a menor idade, que é de ".$menor." anos \n");
	print("\n");



  ?>