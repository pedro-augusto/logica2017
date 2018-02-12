<?php

	$cabecalho= file_get_contents("html/cabecalho.html"); 

	print($cabecalho);
	print(date("l,F d, Y, H:i:s"));


	$dados= $_POST;


	foreach ($dados as $dado_requerido => $resposta) {
		if ($dado_requerido=='nome') {
			print("<h1>".$dado_requerido.":".$resposta."</h1>");
		}

		elseif ($dado_requerido=="gravar") {
			print("");
		}


		else {
			print("<h3>".$dado_requerido.":".$resposta."</h3>");
		}
	}

	$arquivo_cod= file("agenda.csv");
	foreach ($arquivo_cod as $linha) {
		$colunas= explode(";", $linha);
		$cod_atual= $colunas[0];
	}

	$codigo= $cod_atual+1;
	$nome= $dados ['nome'];
	$telefone= $dados['telefone'];
	$email= $dados['email'];
	$foto= $dados['foto'];

	$arquivo=fopen("agenda.csv", "a+");

	$texto= $codigo.";".$nome.";".$telefone.";".$email.";"."imagens/".$foto;
	print($texto);

	fwrite($arquivo, "\n".$texto);

	fclose($arquivo);
  ?>

	<h2>Contato Inserido</h2>
	<meta http-equiv="refresh" content="3;URL=index.php">
	
<?
	$rodape= file_get_contents("html/rodape.html");
	print($rodape);

  ?>