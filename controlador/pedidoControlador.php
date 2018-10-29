<?php
/**admin,user */
function index() {
    $dados["carrinho"] = $_SESSION["carrinho"]["produtos"];
    $dados["totalCarrinho"] = $_SESSION["carrinho"]["total"];
    exibir("pedido/finalizar", $dados);

}
