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

function adicionar() {
   
        $idusuario= $_SESSION["auth"]["user"]["idusuario"];
        $produto=$_SESSION["carrinho"]["produtos"];
        $idendereco= $_SESSION["enderecoSelecionado"]["idendereco"];
        $datacompra= date('d/m/y');
        foreach ($produto as $produtos):
            $idproduto =$produtos['idProduto'];
            alert(adicionarPedido($idusuario, $idproduto,$datacompra));
        endforeach;
 
        redirecionar("produto/index");
   
}
