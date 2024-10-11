<?php
/*
	$array1 = array("chave1" => "valor1","chave2" => "valor2");
	$array2 = array("chave2" => "outrovalor", "chave1" => "outrovalor", "chave3" => "valor3","chave4" => "valor4");
	$array3 = array("chave5 => "valor5");
	$result = array_merge($array1, $array2, $array3);
	print_r($result);



	//array intersect serve para retornar valores com a mesma chave em 1 ou mais arrays

	$array1 = array("chave1" => "valor1","chave2" => "valor2");
	$array2 = array("chave2" => "outro valor", "chave1" => "outro valor", "chave3" => "valor3","chave4" => "valor4");
	print_r(array_intersect_key($array1, $array2));
*/


//Array map serve para aplicar uma função em todos os valores do attay
	
	$arr = ['<p>Mateus</p>', 'joao', '<h1>Guilherme</h1>'];

	print_r(array_map('strip_tags', $arr));
?>