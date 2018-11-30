<?php
//Criar as variáveis neste formato

$anoNascimento = 1988;
$nomeCompleto ="Guilherme Firmino Duarte";

//Evitar caracteres especiais nas variáveis, somente underline que pode _

//Não é possível iniciar variável com número, faça assim:

$nome1 = "Guilherme";

$sobrenome = "Firmino";

//Concatenação:

$nomecompleto = $nome1 ." ". $sobrenome;

echo "$nomecompleto";
echo "<br>";

/* Comente assim para mais de uma linha*/

echo $nome1 = "Guilherme";
echo "<br>";

//para limpar variáveis use unset, pode ser mais de uma, desde que utilize vírgula entre elas

unset($nome1);

echo $nome1;

//Para verificar se a variável existe:
if (isset($nome1)){
	
	echo $nome1;
}

$nome5 = "Hcode";
$site = "www.hcode.com.br";

$ano = 1990;

$salario = 5500.99;

$bloqueado = false;

///////

$frutas = array("abacaxi", "laranja", "manga");

echo $frutas[2];

$nascimento = new DateTime();

//var_dump($nascimento);

$arquivo = fopen("codigos_git.php", "r");
echo "<br>";
var_dump($arquivo);

//Tipos: básicos, compostos e especiais

$nulo = null;
// é diferente disto, pois neste caso abaixo - vazio - ele reservou espaço na memória
$vazio = "";





?>