<?php 
	print("\n");

// COMEÇO (DIGITE SUAS INFORMAÇÕES E CÁLCULO DA MÉDIA) ------------------


	print("digite o seu nome \n");
	$NOME = fgets (STDIN); // NOME
	print("\n");

	print("digite a primeira nota \n");
	$NOTA1 = fgets (STDIN); // NOTA 1
	print("\n");

	print("digite a segunda nota \n");
	$NOTA2 = fgets (STDIN); // NOTA 2
	print("\n");

	print("digite a terceira nota \n");
	$NOTA3 = fgets (STDIN); // NOTA 3
	print("\n");

	print("Informe a porcentagem da sua frequência \n");
	$FREQU= fgets (STDIN); // FREQUÊNCIA
	print("\n");

	$SOMA= ($NOTA1) + ($NOTA2) + ($NOTA3); //SOMA DAS NOTAS
	$TOTAL= ($SOMA) / 3; // MÉDIA
	print("\n");

print ("!!! sua média é $TOTAL !!! \n"); //TOTAL
print("\n");

// TESTES! ----------------------------------------------------------------


if (75 <= $FREQU) {

	if (7 <= $TOTAL) {
		print("você está aprovado! Boas férias! \n"); //APROVADO POR MÉDIA E FREQUÊNCIA
		print("\n");
	}

	else {
		print("você está reprovado pela média, digite sua nota do exame \n"); //REPROVADO PELA MÉDIA, DIGITA NOTA DE EXAME
		$EXAME= fgets (STDIN);
		print("\n");

			if (5 <= $EXAME) {
				print("você está aprovado pela sua nota do exame. \n"); //PASSOU NO EXAME
				print("\n");
			}

			else {
				print ("você está detido. \n"); //DETIDO NO EXAME
				print("\n");
			}
	}

}

else {
	print ("você reprovou por frequência. \n"); //REPROVADO POR FREQUÊNCIA
	print("\n");
}


// RESULTADO FINAL! -----------------------------------------------------


print("obrigado! \n"); //OBRIGADO
print("\n");


?>