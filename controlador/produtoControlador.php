<?php
require "modelo/produtoModelo.php";

/** anon,admin,user */
function index() {
    $min=10;
    $dados['produtos'] = selecionarAlgunsProdutos($min);
    exibir("produto/listar", $dados);
}

/** anon,admin,user */
function listarTodos() {
    $dados['produtos'] = selecionarTodosProdutos();
    exibir("produto/listarTodos", $dados);
}

/** anon,admin,user */
function listarCategoria($nome,$valor) {
    $dados['produtos'] = selecionarProdutoCategoria($nome,$valor);
    exibir("produto/listarTodos", $dados);
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

/** anon,admin,user */

function visualizar($id) {
   $dados['produtos'] = pegarProdutoPorId($id);
    exibir("produto/visualizar", $dados);
}

/** admin */
function deletar($termo) {
    alert(deletarProduto($termo));
    redirecionar("produto/index");
}

/** anon,admin,user */
function buscar() {
    extract($_POST);
    $dados['produtos'] = buscarM($termo);
    exibir("produto/busca", $dados);
}


?>