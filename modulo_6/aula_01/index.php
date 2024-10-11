<?php

	$arr = array('chave 1' => 'Mateus', 'joao', 'felipe', 'mario');
	$arr2 = array('Mateus', 'joao', 'felipe', 'mario');

/*
	foreach ($arr as $key => $value) {
		echo $key;
		echo '=>';
		echo $value;
		echo '<hr>';
	}
*/

	$total = count($arr2);

	for ($i=0; $i < $total; $i++) { 
		echo $arr2[$i];
		echo '<br>';
	}

?>