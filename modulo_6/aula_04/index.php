<?php

	function mostrarNome($nome,$idade) {
		echo '</h2>Nome é: </h2>'.$nome.'<br>';
		echo "Idade: $idade";
	}

	mostrarNome('Mateus', 18);
	echo '<hr>';


	function calculadora($num1 = 10,$num2 = 5){
		echo $num1 + $num2;
	}

	calculadora(15);
	echo '<hr>';

	function verdade()
	{
		return true;
	}


	function retornarString()
	{
		return 'String retornada';
	}

	$verdade = verdade();
	echo $verdade;
	echo '<hr>';
	
	echo retornarString();


?>