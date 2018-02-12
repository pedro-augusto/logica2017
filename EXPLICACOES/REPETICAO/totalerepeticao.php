<?php

	$total= 0;
	$contador =1;

	while ($contador <= 10) {
	$numero= fgets (STDIN);

	$total = $numero + $total;

	}

	print ("$total");

?>