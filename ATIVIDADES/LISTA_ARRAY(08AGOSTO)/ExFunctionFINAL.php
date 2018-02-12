<?php

	print("\n");
	print("----------------------Exercicio 1--------------------- \n");
	print("\n");

		function Soma ($valor1, $valor2) {
			$resultado= $valor1 + $valor2;
			print("O resultado da soma é $resultado \n");
		}


		print("Digite o primeiro número a ser somado \n");
		$primeiroS= fgets(STDIN);

		print("\n");

		print("Digite o segundo número a ser somado \n");
		$segundoS= fgets(STDIN);

		print("\n");

		Soma ($primeiroS, $segundoS);
		print("Obrigado! \n");
		print("\n");


	print("\n");
	print("----------------------Exercicio 2--------------------- \n");
	print("\n");


		function Multiplica ($valor1, $valor2) {
			$resultado= $valor1 * $valor2;
			print("O resultado da multiplicação é $resultado \n");
		}

		print("Digite o primeiro número a ser multiplicado \n");
			$primeiroMR= fgets(STDIN);

			print("\n");

			print("Digite o segundo número a ser multiplicado \n");
			$segundoMR= fgets(STDIN);

			print("\n");

			multiplica ($primeiroMR, $segundoMR);
			print("Obrigado! \n");
			print("\n");


	print("\n");
	print("----------------------Exercicio 3--------------------- \n");
	print("\n");


		function Operação ($valor1, $simbolo, $valor2) {
			
			if ($simbolo== "+") {
				$resultado= $valor1 + $valor2;
			}

			elseif ($simbolo== "-") {
				$resultado= $valor1 - $valor2;
			}

			elseif ($simbolo== "*") {
				$resultado= $valor1 * $valor2;
			}

			elseif ($simbolo== "/") {
				$resultado= $valor1 / $valor2;
			}

			else {
				print("Recomece o programa, a operação digitada não condiz com nenhuma das opções \n");
				$resultado= "inválido";
			}

			print("O resultado da operação é $resultado \n");
		}


		print("Digite o primeiro número a ser alterado através de uma operação \n");
			$primeiroO= trim (fgets(STDIN));

			print("\n");

			print("Digite o símbolo da operação \n");
			$operação= trim (fgets(STDIN));

			print("\n");

			print("Digite o segundo número a ser alterado através de uma operação \n");
			$segundoO= trim (fgets(STDIN));

			print("\n");

			Operação ($primeiroO, $operação, $segundoO);
			print("Obrigado! \n");
			print("\n");


	print("\n");
	print("----------------------Exercicio 4 (RETURN)--------------------- \n");
	print("\n");


		function SomaR ($valor1, $valor2) {
			$resultado= $valor1 + $valor2;
			return $resultado;
		}

		print("Digite o primeiro número a ser somado \n");
		$primeiroSR= fgets(STDIN);

		print("\n");

		print("Digite o segundo número a ser somado \n");
		$segundoSR= fgets(STDIN);

		print("\n");

		print ("O resultado da soma é ".SomaR ($primeiroSR, $segundoSR)."! \n");
		print("Obrigado! \n");
		print("\n");


	print("\n");
	print("----------------------Exercicio 5 (RETURN)--------------------- \n");
	print("\n");



		function MultiplicaR ($valor1, $valor2) {
			$resultado= $valor1 * $valor2;
			return $resultado;
		}

			print("Digite o primeiro número a ser multiplicado \n");
			$primeiroMR= fgets(STDIN);

			print("\n");

			print("Digite o segundo número que multiplicará o primeiro número \n");
			$segundoMR= fgets(STDIN);

			print("\n");

			print("O resultado da multiplicação é ".multiplicaR ($primeiroMR, $segundoMR)."! \n");
			print("Obrigado! \n");
			print("\n");



	print("\n");
	print("----------------------Exercicio 6 (RETURN)--------------------- \n");
	print("\n");



		function Subtrai ($valor1, $valor2) {
			$resultado= $valor1 - $valor2;
			return $resultado;
		}

			print("Digite o primeiro número a ser subtraído \n");
			$primeiroSUB= fgets(STDIN);

			print("\n");

			print("Digite o segundo número que subtrairá o primeiro número \n");
			$segundoSUB= fgets(STDIN);

			print("\n");

			print("O resultado da subtração é ".Subtrai ($primeiroSUB, $segundoSUB)."! \n");
			print("Obrigado! \n");
			print("\n");



	print("\n");
	print("----------------------Exercicio 7 (RETURN)--------------------- \n");
	print("\n");



		function Divide ($valor1, $valor2) {
			$resultado= $valor1 / $valor2;
			return $resultado;
		}

			print("Digite o primeiro número a ser dividido \n");
			$primeiroDIV= fgets(STDIN);

			print("\n");

			print("Digite o segundo número que dividirá o primeiro número \n");
			$segundoDIV= fgets(STDIN);

			print("\n");

			print("O resultado da subtração é ".Divide ($primeiroDIV, $segundoDIV)."! \n");
			print("Obrigado! \n");
			print("\n");



	print("\n");
	print("----------------------Exercicio 8 (RETURN)--------------------- \n");
	print("\n");



		function OperaçãoReturn ($valor1, $simbolo, $valor2) {
			
			if ($simbolo== "+") {
				$resultado= SomaR ($valor1, $valor2);
			}

			elseif ($simbolo== "-") {
				$resultado= Subtrai ($valor1, $valor2);
			}

			elseif ($simbolo== "*") {
				$resultado= MultiplicaR ($valor1, $valor2);
			}

			elseif ($simbolo== "/") {
				$resultado= Divide ($valor1, $valor2);
			}

			else {
				print("Recomece o programa, a operação digitada não condiz com nenhuma das opções \n");
				$resultado= "inválido";
			}

			return $resultado;

		}


			print("Digite o primeiro número a ser alterado através de uma operação \n");
			$primeiroOR= trim (fgets(STDIN));

			print("\n");

			print("Digite o símbolo da operação \n");
			$operaçãoR= trim (fgets(STDIN));

			print("\n");

			print("Digite o segundo número a ser alterado através de uma operação \n");
			$segundoOR= trim (fgets(STDIN));

			print("\n");

			print ("O resultado desta operação utilizando o mecanismo RETURN é ".OperaçãoReturn ($primeiroOR, $operaçãoR, $segundoOR)."! \n");
			print("Obrigado! \n");
			print("\n");



	print("\n");
	print("----------------------Exercicio 9 (RETURN)--------------------- \n");
	print("\n");



		function Situação ($nota1, $nota2, $mediaescola) {
			$SomaMédia= OperaçãoReturn($nota1, "+", $nota2);
			$Total= OperaçãoReturn($SomaMédia, "/", "2");

			if ($Total < $mediaescola) {
				return "REPROVADO";
			}

			else {
				return "APROVADO";
			}

		}


		print("Digite a primeira nota do aluno \n");
		$primeiranota= fgets(STDIN);

		print("\n");

		print("Digite a segunda nota do aluno \n");
		$segundanota= fgets(STDIN);

		print("\n");

		print("Digite a média da escola \n");
		$mediaescola= fgets(STDIN);

		print("\n");

		print("A situação do aluno é ".Situação($primeiranota, $segundanota, $mediaescola).". \n");
		print("Obrigado! \n");
		print("\n");



	print("\n");
	print("----------------------Exercicio 10 (RETURN)--------------------- \n");
	print("\n");


	function Maior ($numbers) {

		for ($i=0; $i < sizeof($numbers); $i++) { 

			if ($i== 0) {
				$maior= $numbers [$i];
			}

			if ($numbers[$i] > $maior) {
					$maior= $numbers [$i];
			}

		}

		return $maior;
	}

	$numeros1= array(1,50,500,751,6985,7444444,-1);

	print("O maior número do array é ".Maior($numeros1).". \n");



	print("\n");
	print("----------------------Exercicio 11 (RETURN)--------------------- \n");
	print("\n");


	function Menor ($numbers) {
		
		for ($i=0; $i < sizeof($numbers); $i++) { 


			if ($i== 0) {
				$menor= $numbers [$i];
			}


			if ($numbers[$i] < $menor) {
					$menor= $numbers [$i];
			}
		}

		return $menor;
	}

	$numeros2= array(20,1,50,500,751,6985,7444444);

	print("O menor número do array é ".Menor($numeros2).". \n");



	print("\n");
	print("----------------------Exercicio 12 (RETURN)--------------------- \n");
	print("\n");

	function Crescente($conjunto){
	$aux=0;

	//a repetição de $i significa as repetiçoes das posiçoes 
	for($i=0; $i<sizeof($conjunto)-1; $i++){
		//as repetiçoes de $j significa os momentos que o CONTEUDO deve ser trocado
		for($j=$i+1; $j<sizeof($conjunto); $j++){
			if($conjunto[$i]>$conjunto[$j]){
				$aux=$conjunto[$i];
				$conjunto[$i]=$conjunto[$j];
				$conjunto[$j]=$aux;
			}
		}
	}
	return $conjunto;
}

	$numeros= array(2,5,3,8,1);
	$numeros=Crescente($numeros);
	print("Ordem crescente: ");

	for($i=0; $i< sizeof($numeros); $i++){
		print($numeros[$i]." " );
	}
	print("\n");


	print("\n");
	print("----------------------Exercicio 13 (RETURN)--------------------- \n");
	print("\n");


	function Decrescente($conjunto){
	$aux=0;

		//a repetição de $i significa as repetiçoes das posiçoes 
		for($i=0; $i<sizeof($conjunto)-1; $i++){
			//as repetiçoes de $j significa os momentos que o CONTEUDO deve ser trocado
			for($j=$i; $j<sizeof($conjunto); $j++){
				if($conjunto[$i]<$conjunto[$j]){
					$aux=$conjunto[$j];
					$conjunto[$j]=$conjunto[$i];
					$conjunto[$i]=$aux;
				}
			}
		}
		return $conjunto;
	}

	$numeros= array(2,5,3,8,1);
	$numeros=Decrescente($numeros);
	print("Ordem decrescente: ");

	for($i=0; $i< sizeof($numeros); $i++){
		print($numeros[$i]." " );
	}

	print("\n");

  ?>