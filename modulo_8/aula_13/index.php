<?php

	$pdo = new PDO('mysql:host=localhost;dbname=modulo_081','root','');

	$sql = $pdo->prepare("SELECT * FROM `clientes` WHERE `cargo` = (SELECT `id` FROM `cargos` WHERE `nome_cargo` = 'administrador')");

	$sql->execute();

	$clientes = $sql->fetchAll();
		
	foreach ($clientes as $key => $value) {
		echo $value['nome'];
		echo "<hr>";
	}
?>