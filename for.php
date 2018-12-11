<?php
//For possui início, meio e fim. Pode Incrementar ou decrementar
//Precisa criar um contador

//for($i=0; $i <= 10; $i++){
	
	//echo $i . "<br>";
	
//}
//$i (CONTADOR)
// ; $i <=10 (significa até onde vai)
// $i++ (está incrementando o valor)
echo "<br>";

for ($i=0; $i <1000; $i+=5){
	//O "continue" faz ele ignorar 
	if ($i > 200 && $i < 800) continue;
	//do 200 ao 800 não quero que aparece na tela
	
	if ($i === 900) break;

	echo $i . "<br>";
};

?>