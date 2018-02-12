<?php


	//FUNÇÃO ABRE UM ARQUIVO E RETORNA O SEU CONTEÚDO EM UMA STRING
	$cabecalho= file_get_contents("html/cabecalho.html");
	//SE FOSSE UM ARQUIVO PHP, NÃO FUNCIONÁRIA POIS TRARIA COMO TEXTO, NÃO CÓDIGO EXECUTÁVEL. NESSE CASSO USARIAMOS INCLUDE

	print($cabecalho);
	print('<a href="inserir_contato.php"><h3>Inserir Contato</h3></a>');
	print(date("l,F d, Y, H:i:s"));
	print("<hr>");



	//FUNÇÃO FILE ABRE UM ARQUIVO E RETORNA O SEU CONTEÚDO PARA UM ARRAY
	//CADA POSIÇÃO DO ARRAY É UMA LINHA

	$dados= file("agenda.csv");

	//PERCORRER O ARRAY E EXIBIR CADA UM DOS ELEMENTOS


	print("<br><center><table border=1><br>");
	$contador=0;

	foreach ($dados as $linha) {


		//EXPLODE SEPARA AS PARTES DE UMA STRING DADO UM SEPARADOR
		$colunas= explode (";", $linha);
		//PARTES É UM ARRAY QUE RECEBE O RESULTADO DA SEPARAÇÃO DO TEXTO PPELO SEPARADOR ";"

		if ($contador%2==0) {
			$cor= "par";
		} else {
			$cor= "impar";
		}


		if ($linha==0) {
			print("<tr>
				<th class=".$cor.">".$colunas[1]."</th>
				<th class=".$cor.">".$colunas[3]."</th>
			</tr>");

		}else {

			print('

				<tr>
					<td class='.$cor.'> <a href="contato.php?cod='.$colunas[0].'">'.$colunas[1].'</td>
					<td class='.$cor.'>'.$colunas[3].'</td>
				</tr>'

				);
		}

 	$contador++;

	}

	$contador= $contador-1;


	print('<tr><td colspan="4"><h2><center> Foram exibidos '.$contador.' contatos </center></h2></tr>');

	print("</table></center><br>");





	
	$rodape= file_get_contents("html/rodape.html");
	print($rodape);

?>