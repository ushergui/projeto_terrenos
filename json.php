<?php
//É um tipo de arquivo que facilita a integração dos sistemas.
$pessoas = array();

array_push($pessoas, array(
	'nome' => 'João',
	'idade' => 20
));

array_push($pessoas, array(
	'nome' => 'Guilherme',
	'idade' => 30
));

echo json_encode($pessoas);	
?>

