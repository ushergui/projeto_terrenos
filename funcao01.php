<?php
 //Pra ser uma função tem que ter um retorno. 
 //Se vc tem  uma função que não retorna um valor, você tem uma subrotina.

function ola(){

	echo "Olá Mundo!<br>";

}

ola();
ola();
ola();

//Ou pode fazer assim para enviar para tela:

function ola2(){

	return "Olá World!<br>";

}

echo ola2();
$frase = ola2();

echo strlen($frase);






?>

