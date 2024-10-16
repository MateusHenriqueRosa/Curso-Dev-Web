<?php
	
	date_default_timezone_set('America/Sao_Paulo');
	$pdo = new PDO('mysql:host=localhost;dbname=modulo_08','root','');

	if (isset($_POST['acao'])) {
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$momento_registo = date('Y-m-d H:i:s');

	$sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null,?,?,?)");

	$sql->execute(array($nome,$sobrenome,$momento_registo));
	echo "Cliente Inserido com Sucesso!";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario</title>
</head>
<body>
<form method="post">
	<input type="text" name="nome">
	<input type="text" name="sobrenome">
	<input type="submit" name="acao" value="Enviar">
</form>
</body>
</html>