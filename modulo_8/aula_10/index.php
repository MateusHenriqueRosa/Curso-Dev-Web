<?php

	$pdo = new PDO('mysql:host=localhost;dbname=modulo_081','root','');

	$sql = $pdo->prepare("SELECT * FROM `clientes` WHERE nome LIKE '%e%'");

	$sql->execute();

	$clientes = $sql->fetchAll();
		
	foreach ($clientes as $key => $value) {
		echo $value['nome'];
		echo "<hr>";
	}
?>