<?php

	$pdo = new PDO('mysql:host=localhost;dbname=modulo_081','root','');

	$tables = $pdo->query("SHOW TABLES");
	$tables = $tables->fetchAll();

	echo "<pre>";
	print_r($tables);
	echo "</pre>";

	$sql = 'CREATE TABLE Cursos(
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	nome_curso VARCHAR(255) NOT NULL
	)';

	$pdo->exec($sql);
?>