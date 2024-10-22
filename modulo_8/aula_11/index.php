<?php

	$pdo = new PDO('mysql:host=localhost;dbname=modulo_081','root','');

	//$sql = $pdo->prepare("SELECT * FROM `clientes` WHERE id IN(2,3)");

	$sql = $pdo->prepare("SELECT * FROM `clientes` WHERE data BETWEEN '2024-10-22' AND '2024-10-24'");

	$sql->execute();

	$clientes = $sql->fetchAll();
		
	foreach ($clientes as $key => $value) {
		echo $value['nome'];
		echo "<hr>";
	}
?>