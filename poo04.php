<?php
//Método construtor: Usar __construct
//Toda vez que ver __ underline 2x é um construct


class Endereco{
	
	private $logradouro;
	private $numero;
	private $cidade;
	
	//Quando instanciar a classe ele já vai pedir
	
	public function __construct($a, $b, $c){
		
		$this->logradouro = $a;
		$this->numero = $b;
		$this->cidade = $c;
			
		
	}
		public function __destruct(){
			
			var_dump("DESTRUIR");
			
		}
	
		public function __toString(){
			
			return $this->logradouro.", ".$this->numero." - ".$this>cidade;
			
		}
	
	}
	$meuEndereco = new Endereco("Rua ","234","São Sebastião");
	
	//var_dump($meuEndereco);
	
	//unset($meuEndereco);
	
	echo $meuEndereco;
	
?>