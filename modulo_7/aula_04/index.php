<?php

abstract class Teste{

	public function func1()
	{
		echo "chamando função 1";
		echo '<br>';
	}

	abstract function func2();
}

class Principal2{
	public static function outroMetodoStatic(){
		echo 'Outro metodo Static';
		echo '<br>';
	}
}

class Principal extends Teste{

	public function func2(){
		echo 'Estou declarando oficialmente um método abstrato';
		echo '<br>';
	}

	public function funcao(){
		//Principal::metodoStatic();

		self::metodoStatic();
		//Self para chamar metodos Static dentro dessa classe

		Principal2::outroMetodoStatic();
	}

	public static function metodoStatic(){
		echo 'Metodo estatico';
		echo '<br>';
	}
}

$principal = new Principal;

$principal->funcao();

//$principal->func1();

//$principal->func2();

//Principal::metodoStatic();
?>