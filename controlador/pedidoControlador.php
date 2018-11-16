<?php
require "modelo/cupomModelo.php";
require "modelo/pedidoModelo.php";
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

/** admin,user */
function adicionar() {
   
        $idusuario= $_SESSION["auth"]["user"]["idusuario"];
        $idendereco= $_SESSION["enderecoSelecionado"]["idendereco"];
        $datacompra= date('y/m/d');
        $tot=$_SESSION["carrinho"]["total"];
      
        $idpedido=adicionarPedido($idusuario,$idendereco,$datacompra,$tot);
         $produto=$_SESSION["carrinho"]["produtos"];
        foreach ($produto as $produtos):
            $idproduto =$produtos['idProduto'];
            $quantidade =$produtos['quantidade'];
            produtoPedido($idproduto, $idpedido, $quantidade);
        endforeach;
        unset($_SESSION["carrinho"]);
        redirecionar("produto/index");
}
