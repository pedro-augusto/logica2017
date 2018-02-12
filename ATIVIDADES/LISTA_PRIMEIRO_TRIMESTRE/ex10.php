<?php

	$total=0;
	$candidato1=0;
	$candidato2=0;
	$candidato3=0;
	$candidato4=0;
	$nulo=0;
	$brancos=0;
	$porc1=0;
	$porc2=0;
	$porc3=0;
	$porc4=0;
	$porc5=0;
	$porc6=0;

do {

		print("\n");
		print("Digite o código do voto \n");
		$codigo= fgets(STDIN);


		if ($codigo==1) {
			$candidato1= $candidato1 +1;
		}

		elseif ($codigo==2) {
			$candidato2= $candidato2+1;
		}

		elseif ($codigo==3) {
			$candidato3= $candidato3+1;
		}

		elseif ($codigo==4) {
			$candidato4= $candidato4+1;
		}
		
		elseif ($codigo==5) {
			$nulo= $nulo+1;
		}

		elseif ($codigo==6) {
			$brancos= $brancos+1;
		}

		$total++;

	} while ( $codigo != 0);

	

	$total= $total-1; //ASSIM EXCLUIMOS O CÓDIGO ZERO COMO UM VOTO


	$porc1= ($candidato1 / $total) * 100;
	$porc2= ($candidato2 / $total) * 100;
	$porc3= ($candidato3 / $total) * 100;
	$porc4= ($candidato4 / $total) * 100;
	$porc5= ($nulo / $total) * 100;
	$porc6= ($brancos / $total) * 100;


	print("\n");
	print("Foram computados ".$total." votos nesta eleição! \n");
	print("\n");

	print("\n");
	print("O candidato 1 recebeu ".$candidato1." voto(s) e a porcentagem que ele representa é de ".number_format($porc1,2)."% \n");
	print("\n");


	print("\n");
	print("O candidato 2 recebeu ".$candidato2." voto(s) e a porcentagem que ele representa é de ".number_format($porc2,2)."% \n");
	print("\n");


	print("\n");
	print("O candidato 3 recebeu ".$candidato3." voto(s) e a porcentagem que ele representa é de ".number_format($porc3,2)."% \n");
	print("\n");


	print("\n");
	print("O candidato 4 recebeu ".$candidato4." voto(s) e a porcentagem que ele representa é de ".number_format($porc4,2)."% \n");
	print("\n");


	print("\n");
	print("O total de votos nulo(s) é ".$nulo." e a porcentagem é de ".number_format($porc5,2)."%");
	print("\n");


	print("\n");
	print("O total de votos branco(s) é ".$brancos." e a porcentagem é de ".number_format($porc6,2)."%");
	print("\n");

	print("\n");
	print("\n");
	print("Obrigado!");
	print("\n");

?>