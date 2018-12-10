<?php

$nome = "Hcode";

$nome2 = 'Treinamentos';

var_dump($nome, $nome2);

echo "<br><br>";

echo "ABC $nome";

echo "<br><br>";

echo 'ABC $nome';

echo "<br><br>";

$texto = "Guilherme Firmino";

echo $texto."<br><br>";
echo strtoupper($texto). "<br><br>";
echo ucwords($texto)."<br><br>";
echo strtolower($texto)."<br><br>";
echo ucfirst($texto)."<br><br>";


$empresa = "Hcode";

$empresa = str_replace("o", "0", $empresa);
echo $empresa;



?>	