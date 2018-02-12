<?php  

	//VARIÁVEL RECEBERÁ O CONTEÚDO DE UM ARQUIVO E SERÁ UMA STRING

	$contatos= file_get_contents("agenda.csv");
	print($contatos);

?>


