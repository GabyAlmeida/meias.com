
<?php

require "modelo/enderecoModelo.php";

/**admin*/
function index() {
     $dados['enderecos'] = pegarTodosEnderecos();
    exibir("endereco/listar",$dados);
}

/** admin,user */
function adicionar() {
    if (ehPost()) {
        extract($_POST);
        $idusuario=0;
        $idusuario= $_SESSION["auth"]["user"]["idusuario"];
        alert(adicionarEndereco($idusuario,$rua,$bairro,$cidade,$cep));
        redirecionar("produto/index");
    } else {
        exibir("endereco/formulario");
    }
}

/** admin,user */
function editar($id) {
    if (ehPost()) {
        extract($_POST);
        alert(editarEndereco($id,$rua,$bairro,$cidade,$cep));
        redirecionar("endereco/mostrar");
    } else {
        $dados['endereco'] = pegarEnderecoPorId($id);
        $dados['acao'] = "./endereco/editar/$id";
        exibir("endereco/formulario", $dados);
    }
}

/** admin, user */
function deletar($id) {
    alert(deletarEndereco($id));
    redirecionar("endereco/mostrar");
}

/** admin,user */
function selecionar(){
    $id= $_SESSION["auth"]["user"]["idusuario"];
    $dados['enderecos'] = pegarEndereco($id);
    exibir("endereco/selecionar", $dados);
}

/** admin,user */
function esse($id){
    $enderecoSelecionado = pegarEnderecoPorId($id);
    $_SESSION["enderecoSelecionado"] = $enderecoSelecionado;
    redirecionar("pedido");
    //exibir("pedido/finalizar", $dados);
}

/** admin,user */
function mostrar(){
    $id= $_SESSION["auth"]["user"]["idusuario"];
    $dados['enderecos'] = pegarEndereco($id);
    exibir("endereco/exibir", $dados);
}