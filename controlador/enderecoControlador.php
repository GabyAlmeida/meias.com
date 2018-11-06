
<?php

require "modelo/enderecoModelo.php";

/** anon,admin,user */
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
        redirecionar("endereco/index");
    } else {
        exibir("endereco/formulario");
    }
}

/** admin,user */
function editar($id) {
    if (ehPost()) {
        extract($_POST);
        alert(editarEndereco($id,$rua,$bairro,$cidade,$cep));
        redirecionar("endereco/index");
    } else {
        $dados['endereco'] = pegarEnderecoPorId($id);
        $dados['acao'] = "./endereco/editar/$id";
        exibir("endereco/formulario", $dados);
    }
}

/** admin, user */
function deletar($id) {
    alert(deletarEndereco($id));
    redirecionar("endereco/index");
}

function selecionar(){
    $id= $_SESSION["auth"]["user"]["idusuario"];
    $dados['enderecos'] = pegarEndereco($id);
    exibir("endereco/selecionar", $dados);
}

function esse($id){
    $enderecoSelecionado = pegarEnderecoPorId($id);
    $_SESSION["enderecoSelecionado"] = $enderecoSelecionado;
    redirecionar("pedido");
    //exibir("pedido/finalizar", $dados);
}