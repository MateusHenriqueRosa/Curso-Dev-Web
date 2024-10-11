<?php
//Essa é uma classe de exemplo

//Public funciona em qualquer lugar
//Private funciona apenas dentro da classe

class Exemplo{

	private $var1;
	public $var2;

	public static $var3 = 'static';

	public function metodo1(){
		
	}

	public static function metodoEstatico(){
		echo "<br> Echo do metodo estatico";
	}

	public function setVar1($var1){
		$this->var1 = $var1;
		return $this->var1;
	}

	public function callVar1()
	{
		echo $this->var1;
	}

	private function metodo2(){
		
	}
}

?>