<?php

	$valor1 = 10;
	$valor2 = '10';
	$nome1 = 'Mateus';
	$nome2 = 'Felipe';

	//Um sinal de igual quer dizer que estamos atribuindo um valor.
	//Sempre retorna verdadeiro.
	/*
	if ($nome1 = $nome2) {
		echo 'Verdade';
	}

	//Apenas confere se o valor é igual
	if ($nome1 == $nome2) {
		echo 'Verdade';
	}

	//Conferimos para ver se é diferente
	if ($nome1 != $nome2) {
		echo 'É diferente';
	}
	

	//Confere se são identicos, mesmo valor e mesmo tipo de variável
	if ($valor1 === $valor2) {
		echo 'Verdade';
	} else {
		echo 'Não são identicos';
	}
	*/

	//Comparamos para ver se são diferentes, tipo e valor
	if ($valor1 !== $valor2) {
		echo 'Verdade';
	}

?>