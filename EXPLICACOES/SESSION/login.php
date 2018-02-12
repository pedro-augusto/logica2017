<!DOCTYPE html>
<html>
<head>
	<title>TESTE</title>
</head>
<body>

<?php
	session_start();

	$login= $_POST['login'];
	$senha= $_POST['senha'];

	if ($login=="admin" and $senha=="7531") {
		print('Olá administrador!');

		$_SESSION['nome']= "Administrador";
		$_SESSION['login']= "admin";

		print('<meta http-equiv="refresh" content="3;url=restrito_adm.php">');
	} else {
		print('Dados invalidos! Redirecionando...');
		print('<meta http-equiv="refresh" content="3;url=publica.php">');
	}

?>

</body>
</html>