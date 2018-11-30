<?php
$a = 50;
$b = 35;

//Spaceship: Compara menor (aparece 1), igual (aparece 0) e maior (aparece -1)
var_dump($a <=> $b);

echo "<br><br>";


//
$c = NULL;

$d = NULL;

$e = 22;

//Procurar a primeira variável que não for nulo
echo $c ?? $d ?? $e;


echo "<br><br>";





?>	