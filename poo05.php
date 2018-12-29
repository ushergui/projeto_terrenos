<?php
//Encapsulamento é para proteger as informações e organizar quem tem  acesso

class Pessoa{
	
	public $nome = "Guilherme";
	
	protected $idade = 48;
	
	private $senha = "123456";
	
	public function verDados(){
		
		echo $this->nome. "<br/>";
		echo $this->idade. "<br/>";
		echo $this->senha. "<br/>";
		
		
	}
	
	
}
	$objeto = new Pessoa();

	//echo $objeto->nome. "<br/>";

	$objeto->verDados();	

	//Públic -> Todos conseguem ver;
	//Protect -> Na mesma classe e classe extendida
	//Private ->  Somente na classe
	

	
?>