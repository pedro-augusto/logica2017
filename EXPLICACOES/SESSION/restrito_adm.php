<?php

	session_start();

	if ($_SESSION['login']=='admin') {
		print('

			<!DOCTYPE html>
			<html>
			<head>
				<title>RESTRITO ADM</title>
			</head>
			<body>
				<h1>Página do '.$_SESSION['nome'].'</h1>
				<a href="logout.php">SAIR</a>
				<a href="cadastro.php">Cadastro </a>
			</body>
			</html>

			');
	} else {
		print('Acesso negado');
		print('<meta http-equiv="refresh" content="3;url=publica.php">');
	}

?>