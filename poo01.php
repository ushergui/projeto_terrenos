<?php
//Usa sempre a palavra "class", a primeira letra é maiúscula

class Pessoa { //Classe
	
	//encapsulamento
	public $nome;//Atributo
	//função
	public/*encapsulamento*/ function falar(){//Método (função da classe)
		//$this é a representação da nossa classe já instaciada
		return "O meu nome é: ".$this->nome;
		
	}
	
	//Atributo fora do método, escreve normal. Dentro de um método, você utiliza $this
		
}

$guilherme = new Pessoa();
$guilherme->nome = "Guilherme Firmino";
echo $guilherme->falar();

?>