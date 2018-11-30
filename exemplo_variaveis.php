<?php
//Toda informação que vir por get ou post será STRING
//Por isto tem que fazer a conversão do arquivo, conforme abaixo:
$nome = (int)$_GET["a"];
$sobrenome = (int)$_GET["b"];
//Está forçando o tipo de variável independente do que veio




//Se quiser enviar mais de uma variável via GET, vc deve usar o & (E comercial)
var_dump($nome);
echo "<br>";
var_dump($sobrenome);

echo "<br>";

$ip = $_SERVER["REMOTE_ADDR"];

echo $ip;

echo "<br>";

$teste = $_SERVER["SCRIPT_NAME"];

var_dump($teste);

//Escopo de variáveis: Até onde ela atuará?

//Exemplo abaixo, criei a variável $teste2, depois criei a função teste() que dá um print da variável $teste2
//Porém vai dar erro de variável não definida, porque a variável está fora do escopo da função
$teste2 = "Abcde";
echo "<br>";
function teste(){
	
	//Para poder usar a variável $teste2 dentro da função teste(), devemos usar o global:
	global $teste2;
	echo $teste2;
}

function teste2(){
	
		$nome2 = "João";
		echo $nome2." "."agora no teste 2";
	
}

teste();
echo "<br>";
teste2();
?>