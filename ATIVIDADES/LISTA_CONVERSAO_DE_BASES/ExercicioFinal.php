<?php

	// JULIA HINTZ, LAÍZA, PEDRO AUGUSTO

	include ('FUNCTIONS/binariodecimal.php'); //Julia Hintz
	include ('FUNCTIONS/decimalbinario.php'); //Laíza
	include ('FUNCTIONS/qualquerbase.php'); //Pedro Augusto

	print(" Seja bem vindo ao programa de conversões! \n");
	print("\n");
	print(" Códigos desenvolvidos por: Laíza, Júlia e Pedro Augusto, da 1INFO3! \n");
	print("\n");


	print(" Agora escolha uma das opções: \n");
	print("\n");
	print("   1 => Converter de base binária para decimal; \n");
	print("   2 => Converter de base decimal para binária; \n");
	print("   3 => Converter de qualquer base para decimal. \n");

	print("\n");
	print("\n");
	print(" Resposta: ");
	$opção=trim(fgets(STDIN));
	print("\n");

	print(" IMPORTANTE: Esse código não consegue converter letras presentes, por exemplo, na base hexadecimal AINDA. \n");
	print("\n");

	if ($opção==1 or $opção==2 or $opção==3) {

		print(" Digite o número a ser convertido \n");
		print(" Resposta: ");
		$numero= trim(fgets(STDIN));
		print("\n");
		

			if ($opção==1) {
				$numero = (string)$numero;
				$resultado1= BinaDec($numero);
				print(" O resultado desta operação é ".$resultado1." na base 10. \n");
			}

			elseif ($opção==2) {
				$resultado2= Decin ($numero);
				print(" O resultado desta operação é ".$resultado2." na base 2. \n");

			}

			elseif ($opção==3) {

				print(" Digite a base do número que será transformado em decimal \n");
				print(" Resposta: ");
				$base= trim(fgets(STDIN));
				print("\n");

				$resultado3= QualDec($base, $numero);
				print(" O resultado desta operação é ".$resultado3." na base 10. \n");
				print("\n");
			

			}

	}

	else {
		print(" A opção digitada não corresponde a nenhuma das opções disponíveis \n");
	}

		
	print(" Obrigado! \n");
	print("\n");

 ?>