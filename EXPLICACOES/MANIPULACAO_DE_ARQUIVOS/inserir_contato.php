<?php

	$cabecalho= file_get_contents("html/cabecalho.html"); 

	print($cabecalho);
	print(date("l,F d, Y, H:i:s"));
?>

	<form method="post" action="gravar_contato.php"> <!-- ACTION: PARA ONDE EU MANDO OS DADOS QUANDO EU CLICAR NO SUBMIT -->

		<label for="nome">Nome</label>
		<input type="text" name="nome">

		<label for="telefone">Telefone</label>
		<input type="text" name="telefone">

		<label for="email">Email</label>
		<input type="email" name="email">

		<label for="foto">Foto</label>
		<input type="text" name="foto">

		<input type="submit" name="gravar" value="gravar">

	</form>


<?php

	$rodape= file_get_contents("html/rodape.html");
	print($rodape);

  ?>