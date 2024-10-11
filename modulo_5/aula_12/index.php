<?php

/*
Operadores de incremento e decremento
++$a Pré-incremento: Incrementa $a em um, e então retorna $a.
$a++ Pós-incremento: Retorna $a, e então incrementa $a em um.
–$a Pré-decremento: Decrementa $a em um, e então retorna $a.
$a– Pós-decremento: Retorna $a, e então decrementa $a em um.
*/

/*
//Laço de repetição FOR
	for ($i=0; $i < 10; $i++) { 
		echo 'Ola Mundo';
		echo "<br> $i";
		echo '<hr>';
	}
*/
/*
//Laço de repetição WHILE
	$contador = 0;

	while ($contador < 10) {
		echo 'Alo Mundo';
		echo "<br> $contador";
		echo '<hr>';
		$contador++;
	}
*/

//Laço de repetição DO
	$contador = 9;

	do {
		echo 'Ola Mundo';
		echo "<br> $contador";
		echo '<hr>';
		$contador++;
	} while ($contador == 10);
?>