<?php
require "modelo/produtoModelo.php";
require "modelo/pedidoModelo.php";

/** admin */
function index(){
    exibir("admin/listar");
}

/** admin */
function estoque(){
     $dados['produtos'] = selecionarTodosProdutos();
     exibir("admin/estoque", $dados);
}

/** admin */
function categoria(){
    if (ehPost()) {
        extract($_POST);
        $nome="categoria";
        $dados['produtos'] = selecionarProdutoCategoria($nome,$categoria);
        exibir("admin/categoria", $dados);
    } else {
        exibir("admin/categoria");
    }
}

/** admin */
function intervalo(){
        if (ehPost()) {
        extract($_POST);
        $dados['pedidos'] = selecionarPedidoPeriodo($inicio,$fim);
        exibir("admin/intervalodata", $dados);
    } else {
        exibir("admin/intervalodata");
    }
}

/** admin */
function municipio(){
    if (ehPost()) {
        extract($_POST);
        $dados['pedidos'] = selecionarPedidoMunicipio($municipio);
        exibir("admin/municipio", $dados);
    } else {
        exibir("admin/municipio");
    }
}

/** admin */
function faturamento(){
        if (ehPost()) {
        extract($_POST);
        $dados['pedidos'] = selecionarPedidoPeriodo($inicio,$fim);
        $dados['inicio'] = $inicio;
        $dados['fim'] = $fim;
        exibir("admin/faturamento", $dados);
    } else {
        exibir("admin/faturamento");
    }
}
