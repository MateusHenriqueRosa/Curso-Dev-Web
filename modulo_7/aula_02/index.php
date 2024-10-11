<?php

	include('Exemplo.class.php');
	$exemplo = new Exemplo();
	//$exemplo->var2 = 'Mateus';
	$exemplo->setVar1('Mateus');
	$exemplo->callVar1();

	$exemplo2 = new Exemplo();
	$exemplo2->setVar1('JP');
	$exemplo2->callVar1();
	/*$exemplo2->var2 = 'Jp';

 	echo "$exemplo->var2 <br> $exemplo2->var2 <br>";

 	Exemplo::$var3 = 'Static exemplo';
 	echo Exemplo::$var3;

 	Exemplo::metodoEstatico();
 	*/
?>