<?php

	session_start();

	if ( isset($_SESSION['login']) and $_SESSION['login']=='admin') {
		print('

			<!DOCTYPE html>
			<html>
			<head>
				<title>RESTRITO ADM</title>
			</head>
			<body>
				<h1>Página do '.$_SESSION['nome'].'- CADASTRO</h1>
			</body>
			</html>');

		} else {
			print('Acesso negado');
			print('<meta http-equiv="refresh" content="3;url=publica.php">');
		}



  ?>