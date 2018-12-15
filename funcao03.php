<?php

//parâmetros (argumentos) de uma função
//Neste caso passei a variável dentro da função
/*
function ola($texto){
		
	return "Olá $texto!<br>";
}

echo ola("Mundo");
echo ola("Gláucio");
echo ola("João");
*/
//É possível vc colocar um valor padrão na variável:
//Neste caso, não é obrigado passar um valor depois para variável

function olas($texto="Mundo", $periodo = "bom dia"){
		
	return "Olá $texto! $periodo! <br>";
}
echo olas();
echo ("","Bom dia!");
echo olas("Guilherme");
echo olas("Cláudio");
echo olas("Rodrigo");
//Quando estiver usando dois ou mais parâmetros, e um deles for obrigatório e o os 
//outros não, oq forem obrigatórios coloque na esquerda
//Parâmetros que não tem valor padrão, vc deve colocar ele no começo (esquerda)
?>









 