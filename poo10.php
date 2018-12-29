<?php


class Animal {
	
	public function falar(){
		
		return "Som";
		
	}
	
	public function mover(){
		
		return "Anda";
		
	}
		
}

class Cachorro extends Animal {
	
	public function falar(){
		
		return "Late";
		
	}
	
}

class Gato extends Animal{
	
	public function falar(){
		
		return "Mia";
		
	}
	
	
}

class Passaro extends Animal {
	
	public function falar(){
		
		return "Canta";
		
	}
	
	public function mover(){
		
		return "Voar e ".parent::mover();
		
	}
	
}
	$pardal = new Passaro();
	echo $pardal->falar()."<br/>";
	echo $pardal->mover()."<br/>";

	echo "--------------------------------------<br/>";

	$pluto = new Cachorro();
	echo $pluto->falar()."<br/>";
	echo $pluto->mover()."<br/>";
	
	echo "--------------------------------------<br/>";
	
	$ariel = new Gato();
	echo $ariel->falar()."<br/>";
	echo $ariel->mover()."<br/>";