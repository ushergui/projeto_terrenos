<?php
//Passagem de variável por valor: Você passa a variável, mas ela só vale naquele escopo.
//Fora do escopo ela não mantém o valor... exemplo abaixo: a variável tem valor 10, mas
//dentro da função modificamos o valor dela. Daí ela ficou com valor 60, mas depois chamamos
//a variável fora da função e vimos que ela voltou para o valor original da variável, que é 10
$a = 10;

function trocaValor($a){
	
	$a += 50;
	return $a;
	
}

echo trocaValor($a);
echo "<br>";
echo $a;
//Passagem da variável por referência, você vai lá na memória onde ela está guardada, e muda
//o valor dela. Para isto, basta colocar um & ("E" comercial) ao lado do cifrão


$b = 10;
echo "<br>";

function trocaValor2(&$b){
	
	$b += 50;
	return $b;
	
}

echo trocaValor2($b);
echo "<br>";
echo trocaValor2($b);
echo "<br>";
echo trocaValor2($b);
echo "<br>";

echo $b; 

//É diferente das variáveis globais



?>









 