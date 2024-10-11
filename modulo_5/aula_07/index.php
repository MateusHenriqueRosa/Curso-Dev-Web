<?php

	$nome = 'Mateus';
	$idade = 18;
	$nomedaclasse = 'box';

	//aspas simples -> precisa do . para concatenar
	//echo 'Meu nome é '.$nome;

	//aspas duplas -> não presisa do . para concatenar, colocar variavel dentro das aspas
	//echo "Meu nome é $nome";

	echo "<div class=\"$nomedaclasse\">Meu conteudo da div</div>";

?>