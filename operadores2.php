<?php
$a = 55.0;
$b = 55;


var_dump($a > $b);

echo "<br><br>";

var_dump($a < $b);

echo "<br><br>";

// Um sinal de = (igual) apenas, atribui valor (atribuição)

var_dump($a = $b);
echo "<br><br>";

// Para comparar valores independente do tipo, tem que usar dois iguais ==  (comparação)
var_dump($a == $b);
echo "<br><br>";

// Para comparar valores levando em conta o tipo, tem que usar dois iguais ==  (comparação com tipo)
var_dump($a === $b);
echo "<br><br>";

// Para ver diferença independente do tipo, tem que usar exclamação e igual !=  (diferente)
var_dump($a != $b);
echo "<br><br>";

// Para ver diferença levando em conta o tipo, tem que usar exclamação e dois iguais !==  (diferente com tipo)
var_dump($a !== $b);
echo "<br><br>";

























?>