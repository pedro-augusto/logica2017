<?php

	session_start();

	session_destroy();

	print('Redirecionando...');
	print('<meta http-equiv="refresh" content="3;url=publica.php">');

?>