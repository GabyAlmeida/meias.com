<?php
function addCarrinho($idadd){
	if (!isset($_SESSION["carrinho"])) {
		$_SESSION["carrinho"] = array();
	}
	if (!in_array($idadd, $_SESSION["carrinho"])) {
			$_SESSION["carrinho"][] = $idadd;
		redirecionar("produto/index");
	}else{
		redirecionar("produto/index");
	}
}
?>