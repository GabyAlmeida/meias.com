<?php
require "modelo/produtoModelo.php";

/** anon */
function index() {
    $dados['produtos'] = selecionarTodosProdutos();
    exibir("produto/listar", $dados);
}

/** admin */
function adicionar() {
    if (ehPost()) {
        extract($_POST);
        alert(adicionarProduto($preco,$nome,$descricao,$tamanho,$sexo,$categoria));
        redirecionar("produto/index");
    } else {
        exibir("produto/formulario");
    }
}

/** admin */
function editar($id) {
    if (ehPost()) {
        $nome = $_POST["nome"];
        $descricao = $_POST["descricao"];
        $preco=$_POST["preco"];
        $tamanho=$_POST["tamanho"];
        $sexo=$_POST["sexo"];
        $categoria=$_POST["categoria"];
        alert(editarProduto($id,$preco,$nome,$descricao,$tamanho,$sexo,$categoria));
        redirecionar("produto/index");
    } else {
        $dados['produto'] = pegarProdutoPorId($id);
        $dados['acao'] = "./produto/editar/$id";
        exibir("produto/formulario", $dados);
    }
}

/** anon */

function visualizar($id) {
   $dados['produtos'] = pegarProdutoPorId($id);
    exibir("produto/visualizar", $dados);
}

/** admin */
function deletar($termo) {
    alert(deletarProduto($termo));
    redirecionar("produto/index");
}

/** anon */
function buscar() {
    extract($_POST);
    $dados['produtos'] = buscarM($termo);
    exibir("produto/busca", $dados);
}
?>