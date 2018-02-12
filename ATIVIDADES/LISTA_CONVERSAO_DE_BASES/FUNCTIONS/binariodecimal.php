<?php  
	
	function BinaDec($binario){
	//aqui vou receber o numero binario
		$binario = strrev($binario);
		$soma=0;
		for ($i=0; $i <strlen($binario) ; $i++) { 
		 

			$r1 = $binario[$i]* pow(2,$i);
			$soma = $soma + $r1;
			
		}
		return($soma);
	} 

	
?>




