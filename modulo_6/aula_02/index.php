<?php

	//ARRAYS UNICOS

	$arr = ['Mateus', 'Joao'];
	$arr = array('Mateus','chave2' => 'Joao');

	$arr[0] = 'Mateus';
	$arr[] = 'Joao';

	//ARRAYS MULTIDIMENSIONAIS

	$arr2 = array(array('Mateus', 'Joao'), array(18,32));

	echo $arr2[0][0];

?>