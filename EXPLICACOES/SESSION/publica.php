<?php

	session_start();

	if ( isset($_SESSION['login'])) {
		print('Olá, '.$_SESSION['nome'].', <a href="logout.php">SAIR</a>');
	}

	else {
		print('<!DOCTYPE html>
				<html>
				<head>
					<title>Publica</title>
				</head>
				<body>
					<form action="login.php" method="post">

						<label for="login">Login:</label>
						<input type="text" name="login">

						<label for="senha">Senha:</label>
						<input type="password" name="senha">

						<input type="submit" name="entrar">

					</form>
				</body>
				</html>');
	}

?>