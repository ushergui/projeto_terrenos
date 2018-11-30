<?php
//Operador de atribuição:

// = operador igual: atribuir um valor para a variável
$nome = "Hcode";
echo "<br>";
// . (ponto) Operador que serve para concatenar 
echo $nome. " mais alguma coisa";

echo "<br>";
// .(ponto) e =(igual) ele acrecenta algum valor na variável

$nome .= " Treinamentos";

echo $nome;

// += (mais igual) Vai acrescentando o valor na variável 

echo "<br><br>";

$valorTotal = 0;

$valorTotal +=100;

$valorTotal +=25;

echo $valorTotal;
echo "<br><br>";

// -= (menos igual) Vai diminuindo o valor na variável 

$valorTotal -=25;

echo $valorTotal;
echo "<br><br>";
// *= (vezes igual) Multiplica o valor na variável 

$valorTotal *=.9;

echo $valorTotal;
echo "<br><br>";



//Operadores aritiméticos

$a = 10;
$b = 2;

echo $a + $b;
echo "<br><br>";

echo $a - $b;

echo "<br><br>";

echo $a * $b;

echo "<br><br>";

echo $a / $b;

echo "<br><br>";

// % (percentual) significa módulo, resto da divisão.

echo $a % $b;

echo "<br><br>";
// ** (asterisco asterisco) significa potência

echo $a ** $b;








?>