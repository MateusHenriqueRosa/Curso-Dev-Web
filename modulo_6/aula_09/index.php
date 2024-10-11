<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formularios</title>
</head>
<body>

	<?php
	/*
	if (isset($_GET['acao'])) {
		$nome = @$_GET['name'];
		$email = @$_GET['email'];
		$senha = @$_GET['senha'];

		echo $nome.'<br>';
		echo $email.'<br>';
		echo $senha;
	}
	

	if (isset($_POST['acao'])) {
		$nome = @$_POST['name'];
		$email = @$_POST['email'];
		$senha = @$_POST['senha'];

		echo $nome.'<br>';
		echo $email.'<br>';
		echo $senha;
	}
	*/

	if (isset($_POST['acao'])) {
		foreach ($_POST['valor'] as $key => $value) {
			echo $value;
			echo '<br>';
		}
	}

	?>

	<form method="post">
		<input type="text" name="name">
		<input type="email" name="email">
		<input type="password" name="senha">
		<input type="checkbox" name="valor[]" value="10">10
		<input type="checkbox" name="valor[]" value="20">20
		<input type="checkbox" name="valor[]" value="30">30
		<input type="checkbox" name="valor[]" value="40">40
		<input type="submit" name="acao" value="Enviar">
	</form>
</body>
</html>