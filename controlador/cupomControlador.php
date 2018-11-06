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
$_SESSION["cupom"]= buscarCupom($cupom);
    redirecionar("pedido");
}

