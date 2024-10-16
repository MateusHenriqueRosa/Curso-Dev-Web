<?php

	$pdo = new PDO('mysql:host=localhost;dbname=modulo_08','root','');

	$id = 5;

	// OR funciona como 'ou'
	// AND funciona como 'e'

	$sql = $pdo->prepare("UPDATE `clientes` SET nome='Henrique',sobrenome='da Silva' WHERE id=$id");

	if ($sql->execute()) {
		echo "Cliente Atualizado com Sucesso!";
	}

?>