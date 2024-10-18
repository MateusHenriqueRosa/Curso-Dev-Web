<?php

$pdo = new PDO('mysql:host=localhost;dbname=modulo_08','root','');

/*
	$sql = $pdo->prepare("SELECT * FROM `posts` WHERE `categoria_id` = ?");

	$sql->execute(array($_GET['categoria_id']));

	$info = $sql->fetchAll();
		
	foreach ($info as $key => $value) {
		echo "Título: ".$value['titulo'];
		echo "<br>";
		echo "Conteúdo: ".$value['conteudo'];
		echo "<hr>";
	}

	for($i = 0; $i < count($info);$i++){
		echo "Título: ".$info[$i]['titulo'];
		echo "<br>";
		echo "Conteúdo: ".$info[$i]['conteudo'];
		echo "<hr>";
	}


	$sql = $pdo->prepare("SELECT * FROM categorias");

	$sql->execute();

	$info = $sql->fetchAll();

	foreach ($info as $key => $value) {
		$categoria_id = $value['id'];
		echo "Exibindo posts de: ".$value['nome'];
		echo "<br>";
		$sql = $pdo->prepare("SELECT * FROM `posts` WHERE `categoria_id` = $categoria_id");
		$sql->execute();
		$infoPosts = $sql->fetchAll();
		foreach ($infoPosts as $key => $value) {
			echo "Título: ".$value['titulo'];
			echo "<br>";
			echo "Conteúdo: ".$value['conteudo'];
			echo "<br>";
		}
		echo "<hr>";
	}
*/

	$sql = $pdo->prepare("SELECT `posts`.*,`categorias`.*,`posts`.`id` AS `post_id` FROM `posts` INNER JOIN `categorias` ON `posts`.`categoria_id` = categorias.id");

	$sql->execute();

	$info = $sql->fetchAll(PDO::FETCH_ASSOC); //Retorna apenas nomes dos indices - EX: categoria, nome, id

	foreach ($info as $key => $value) {
		echo "Título: ".$value['titulo'];
		echo "<br>";
		echo "Conteúdo: ".$value['conteudo'];
		echo "<hr>";
	}

	echo '<br>';
	echo '<pre>';
	print_r($info);
	echo '</pre>';

?>