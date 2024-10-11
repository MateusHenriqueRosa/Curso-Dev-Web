<?php

	$conteudo = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus justo massa, efficitur eu nunc at, varius auctor libero. Duis ornare feugiat arcu in malesuada. Maecenas varius nec turpis et sagittis. Ut vitae tempus massa. Proin malesuada quam tortor, sit amet lobortis quam posuere et. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin justo lorem, viverra vel ligula id, accumsan hendrerit nunc. Integer eget ligula suscipit, sollicitudin mi a, lacinia neque. Quisque porta risus in augue blandit, at molestie elit iaculis. Sed dapibus sapien tempus finibus elementum. Etiam interdum fringilla egestas. Sed consequat, urna at pretium dignissim, massa arcu finibus nulla, vitae dictum eros massa laoreet augue. Ut in lacinia mi. Nulla eleifend sem gravida justo euismod, sed aliquam sapien mollis.';

	//Serve para recortar uma string
	//echo substr($conteudo,0,20);

	$nome = 'Mateus Henrique Rosa';

	//Transforma string em array
	$nomes = explode(' ',$nome);

	//print_r($nomes);

	//Transforma array em string
	$nomes = implode(' ', $nomes);

	//echo $nomes;

	//Retira o codigo html
	$conteudo = '<h1>Mateus</h1>Outra coisa';

	//echo strip_tags($conteudo);

	echo htmlentities('<div></div>');

?>