<?php
/*
	//Factory Design Pattern.

class Cachorro
{
	
	function __construct()
	{
		echo "Classe cachorro <br>";
	}
}

class Gato
{
	
	function __construct()
	{
		echo "Classe gato <br>";
	}
}


class Animal{
	public static function build($nomeClasse)
	{
		if (class_exists($nomeClasse)){
			return new $nomeClasse;
		} else{
			die('A classe não existe <br>');
		}
		
	}
}

Animal::build('peixe');
*/
	//Facade Pattern

	class Carrinho{
		public function fecharCarrinho(){
			echo 'carrinho fechado <br>';
		}
	}

	class Frete{
		public function calcularFrete(){
			echo 'frete calculado <br>';
		}	
	}

	class Pedido{
		public function fecharPedido(){
			echo 'pedido fechado <br>';
		}
	}

	class Loja{
			public function finalizarCompra(){
				$this->fecharCarrinho();
				$this->calcularFrete();
				$this->fecharPedido();
				$carrinho = new Carrinho();
			}

			public function fecharCarrinho(){
				
				$carrinho->fecharCarrinho();
			}

			public function calcularFrete()
			{	
				$carrinho->calcularFrete();
			}

			public function fecharPedido()
			{
				$carrinho->fecharPedido();
			}

	}

	$loja = new Loja();
	$loja->finalizarCompra();

?>