<?php

	$herois= array("Batman", "Hulk", "Thor");


	$herois[3] = "Deadpool";
	$herois[]= "Jaspion";
	$herois[]= fgets(STDIN);
	print("\n");

	for ($i=0; $i < 6 ; $i++) { 
		print($herois[$i]. "\n");
	}

 ?>