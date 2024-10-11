<?php

	//Session fica até o navegador ser fechado
	//Cookie fica mesmo se o navegador for fechado e podemos definir o tempo que ele seja expirado

	session_start();
	/*
	$_SESSION['nome'] = 'Mateus';
	$_SESSION['idade'] = 18;
	*/

	//valor negativo no tempo para apagar
	setcookie('nome', 'Mateus',time()+(60), '/');

	echo $_COOKIE['nome'];
?>