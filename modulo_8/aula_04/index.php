<?php

	$pdo = new PDO('mysql:host=localhost;dbname=modulo_08','root','');

	$id = 5;

	$sql = $pdo->prepare("DELETE FROM `clientes` WHERE id=?");

	if ($sql->execute(array($id))) {
		echo "Cliente Deletado com Sucesso!";
	}

?>