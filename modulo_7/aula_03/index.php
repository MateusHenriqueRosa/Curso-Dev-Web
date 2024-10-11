<?php

/*final*/ class Filha{
	public function mostrarOla()
	{
		echo 'Hello World';
		echo '<br>';
		$this->funcaoTeste2();
	}
	protected function funcaoTeste(){
		echo 'Essa é a função protected';
		echo '<br>';
	}

	private function funcaoTeste2(){
		echo 'Essa é a função privada';
		echo '<br>';
	}
}

class Pai extends Filha{

	public function mostrarOla(){
		parent::mostrarOla();
		echo 'Nova Função';
		echo '<br>';
	}

	public function mostrarTchau()
	{
		echo 'Bye World';
		echo '<br>';
		$this->funcaoTeste();
	}
}

$pai = new Pai();
$pai->mostrarTchau();
$pai->mostrarOla();

//$filha = new Filha();

//$filha->mostrarOla();

?>