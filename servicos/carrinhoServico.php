<?php foreach ($_SESSION["carrinho"] as $prodCarrinho) { ?>

	<p><?php echo $prodCarrinho["nomeproduto"] ?></p>
	
	<a href="carrinho.php?id=<?php echo $prodCarrinho['idproduto'] ?>&remove=<?php echo $prodCarrinho['idproduto'] ?>">remover produto</a>
	<?php } 