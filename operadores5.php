<?php

//Prioridade na execução:
//Primeiro multiplica e depois soma
$resultado = 10 + 3 / 2;

echo $resultado;

echo "<br><br>";

//Primeiro soma e depois multiplica
$resultado2 = (10 + 3) / 2;

echo $resultado2;

echo "<br><br>";

//Teste com && (AND)

$resultados = (10 + 3) / 2 > 5 && 10 + 5 < 3;

var_dump ($resultados);

//Teste com || (PIPE = OR)

echo "<br><br>";

$resultados2 = (10 + 3) / 2 > 5 || 10 + 5 < 3;

var_dump ($resultados2);
?>	