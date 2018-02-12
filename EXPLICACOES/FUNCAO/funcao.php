<?php

print("Informe nota 1: \n");
$nota1=fgets(STDIN);

print("Informe nota 2: \n");
$nota2=fgets(STDIN);

print("Informe nota 3: \n");
$nota3=fgets(STDIN);

$soma= $nota1 + $nota2 + $nota3;
$final=$soma/3;

print("Exercicio 1 - SEM FUNÇÃO");
print("\n");
print("Média é $final \n");

print("Exercicio 2 - COM FUNÇÃO");
print("\n");
media($nota1, $nota2, $nota3);


function media($a, $b , $c){
	$media= ($a+$b+$c)/3;
	print("A média é $media \n");
}

print("Exercicio 3 - COM RETURN");
print("\n");

function somaNotas( $p, $s, $t){
	$soma= $s + $p + $t;
	return $soma;
}

function mediaNotas($p, $s , $t){
	$soma= somaNotas($p,$s,$t);
	$media = $soma/3;
	print($media);
}

mediaNotas($nota1,$nota2,$nota3);

?>