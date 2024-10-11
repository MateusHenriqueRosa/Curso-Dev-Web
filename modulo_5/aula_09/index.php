<?php
/*
	$variavel1 = 'Mateus';
	$variavel2 = 'Felipe';

	if ($variavel1 == $variavel2) {
		echo '<div style="height:300px; width:300px;background:red;"></div>';
	} else {
		echo '<div style="height:300px; width:300px;background:blue;"></div>';
	}

?>

<?php

	$variavel1 = 'Mateus';
	$variavel2 = 'Mateus';

	if ($variavel1 == $variavel2) {

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Igual</title>
</head>
<body>
Site dos resultados iguais
</body>
</html>

<?php
    } else {
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>diferente</title>
</head>
<body>
Site dos resultados diferentes
</body>
</html>

<?php 
	}
*/
?>

<?php

	$var1 = 5+2;
	$var2 = '5+2';

	/*
	if (is_string($var2)){
		$var2 = 5+2;
		echo $var2;
	}
	*/

	if ($var1 == $var2) {
		echo 'Verdade';
	} elseif ($var1 != $var2) {
		echo 'Verdade na condição elseif';
	} else {
		echo 'Falso';
	}

?>