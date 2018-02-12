<?php

	$cabecalho= file_get_contents("html/cabecalho.html"); 

	print($cabecalho);
	print(date("l,F d, Y, H:i:s"));
	print("<br>");

	$usuario=$_GET['cod'];

	$dados= file("agenda.csv");

	foreach ($dados as $linha) {
		$colunas= explode (";", $linha);

		if ($colunas[0]==$usuario) {
			$nome= $colunas[1];
			$telefone= $colunas[2];
			$email=$colunas[3];
			$imagem= $colunas[4];
		}

		if ($imagem=='sem') {
			$imagem= "semfoto.jpg";
		}

	}

	print('<h1>'.$nome.'</h1><br>');
	print('<h2>'.$telefone.'</h2><br>');
	print('<h2>'.$email.'</h2><br>');
	print('<img src="imagens/'.$imagem.'">');



	$rodape= file_get_contents("html/rodape.html");
	print($rodape);

  ?>