<?php

Class Pessoa{
	//Objeto Pessoa

	private $nome = 'Mateus';
	private $idade = '19';
	private $peso = '85kg';

	public function crescer(){
		$this->comer();
		echo "Estou crescendo";
	}

	private function comer(){
		echo "Estou coemendo";
	}
}

	//Instanciar
	$pessoa = new Pessoa;
	$pessoa2 = new Pessoa;

	$pessoa->crescer();

?>