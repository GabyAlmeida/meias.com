<?php
require "modelo/cupomModelo.php";
/**admin,user */
function index() {
    $dados["carrinho"] = $_SESSION["carrinho"]["produtos"];
    $dados["totalCarrinho"] = $_SESSION["carrinho"]["total"];
    
    
    if(isset($_SESSION["enderecoSelecionado"])) {
        $dados["enderecoSelecionado"] = $_SESSION["enderecoSelecionado"];    
    }
    
    if(isset($_SESSION["cupom"])) {
        $dados["cupom"] = $_SESSION["cupom"];    
    }
    exibir("pedido/finalizar", $dados);

}
