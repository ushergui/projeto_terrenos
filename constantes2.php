<?php
//Variável = Espaço na memória que usamos para armazenar valores temporariamente
//Constante = É utilizado quando você não precisa mudar um valor, por exemplo o idioma da página

define("BANCO_DE_DADOS", [
	
	'127.0.0.1',
	'root',
	'password',
	'test'
	//se vc quiser que a constante seja case sensitive, usar o true

]/*,true*/);
//nome e valor
//É bom usar as constantes sempre com letra maiúscula
print_r (BANCO_DE_DADOS);



?>

