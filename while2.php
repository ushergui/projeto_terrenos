<?php
//while: enquanto existir registro FAÇA
//do while:

$total = 150;
$desconto = 0.9;

do {
	
	$total *= $desconto;
	
}while ($total  > 100);
echo $total;

?>

