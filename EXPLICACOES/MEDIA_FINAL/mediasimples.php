<?php 
	
	print("digite o seu nome \n");
	$NOME = fgets (STDIN); // NOME

	print("digite a primeira nota \n");
	$NOTA1 = fgets (STDIN); // NOTA 1

	print("digite a segunda nota \n");
	$NOTA2 = fgets (STDIN); // NOTA 2

	print("digite a terceira nota \n");
	$NOTA3 = fgets (STDIN); // NOTA 3

	print("Informe a porcentagem da sua frequência \n");
	$FREQU= fgets (STDIN); // FREQUÊNCIA


	$SOMA= ($NOTA1) + ($NOTA2) + ($NOTA3); //SOMA DAS NOTAS
	$TOTAL= ($SOMA) / 3; // MÉDIA

print ("amore, sua média é $TOTAL \n"); //TOTAL

// TESTE FREQUÊNCIA

if (75 <= $FREQU) {
	print("você passou por frequência \n"); //TESTE FREQUÊNCIA POSITIVO

}

else {
	print ("amore, você reprovou por frequência. \n"); //TESTE FREQUÊNCIA NEGATIVO
}

// TESTE MÉDIA

if (7 <= $TOTAL) {
	print("você está aprovado pela média, amore! \n"); //TESTE MÉDIA POSITIVO
}

else {
	print("você está reprovado pela média, amore \n"); //TESTE MÉDIA NEGATIVO
}





print("obrigado! \n"); //OBRIGADO

?>