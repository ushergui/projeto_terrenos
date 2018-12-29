<?php
$idadeCrianca = 12;
$idadeMaior = 18;$idadeMelhor = 65;
$qualASuaIdade = 73;

//if é condicional, significa "Se"
//else significa "Se não" (só tem uma vez e fica no final)
//else if (pode ter vários) pode escrever tudo junto 

//Se o if tiver somente uma instrção, não precisa de chaves
if($qualASuaIdade <= $idadeCrianca){
	
	echo "Criança";
		
}else if($qualASuaIdade < $idadeMaior){
	
	echo "Adolecente";
}else if($qualASuaIdade < $idadeMelhor){
	
	echo "Adulto";
}else{
	echo "Idoso";
	
}

echo "<br><br>"; 

//ternário: na mesma linha, testa o sim e o não
//echo ($qualASuaIdade < $idadeMaior)?"Menor de Idade":"Maior de Idade";



?>