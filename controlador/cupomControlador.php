<?php
require "modelo/cupomModelo.php";

/** admin */
function index() {
    $dados['cupons'] = selecionarTodosCupons();
    exibir("cupom/listar", $dados);
}
/** admin */
function adicionar() {
    if (ehPost()) {
        extract($_POST);
        alert(adicionarCupom($cupom,$desconto));
        redirecionar("cupom/index");
    } else {
        exibir("cupom/formulario");
    }
}

/** admin */
function deletar($termo) {
    alert(deletarCupom($termo));
    redirecionar("cupom/index");
}

/** anon,admin,user */
function buscar() {
    extract($_POST);
 $dados['cupons']= buscarCupom($cupom);
    $dados["carrinho"] = $_SESSION["carrinho"]["produtos"];
    $dados["totalCarrinho"] = $_SESSION["carrinho"]["total"];
    exibir("pedido/finalizar",$dados);
}

