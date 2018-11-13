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
        alert(adicionarProduto($preco,$nome,$descricao,$tamanho,$sexo,$categoria,$estoque));
        redirecionar("produto/index");
    } else {
        exibir("produto/formulario");
    }
}

/** admin */
function editar($id) {
    if (ehPost()) {
          extract($_POST);
        alert(editarProduto($id,$preco,$nome,$descricao,$tamanho,$sexo,$categoria,$estoque));
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

/** anon */
function addCarrinho($id, $nome, $preco){
    //criar a sessao carrinho
    if (!isset ($_SESSION["carrinho"])){
        $_SESSION["carrinho"]= array ();
        $_SESSION["carrinho"]["produtos"] = array();
        $_SESSION["carrinho"]["total"]=0;
    }
   
    //ver se existe o produto dentro do carrinho
    if( !isset ($_SESSION["carrinho"]["produtos"][$id])){
        $_SESSION["carrinho"]["produtos"][$id]["quantidade"]=1;
        $_SESSION["carrinho"]["produtos"][$id]["nome"]= $nome;
        $_SESSION["carrinho"]["produtos"][$id]["preco"]=$preco;
        $_SESSION["carrinho"]["produtos"][$id]["idProduto"]=$id;
        $_SESSION["carrinho"]["total"]+=$preco;
    }else{
        //o produto ja existe
        $_SESSION["carrinho"]["produtos"][$id]["quantidade"]+=1;
        $_SESSION["carrinho"]["total"]+=$preco;
    }  
        
    redirecionar("produto/listarCarrinho");
}
/** anon */
function listarCarrinho() {
    if(isset($_POST["quantidade"]) && isset($_POST["id"])){
        extract($_POST);
        
        if(!empty($_SESSION["carrinho"]["produtos"])){
            $_SESSION["carrinho"]["total"] -= $_SESSION["carrinho"]["produtos"][$id]["preco"] * $_SESSION["carrinho"]["produtos"][$id]["quantidade"];
            $_SESSION["carrinho"]["produtos"][$id]["quantidade"]=$quantidade;
            $_SESSION["carrinho"]["total"] += $_SESSION["carrinho"]["produtos"][$id]["preco"]*$_SESSION["carrinho"]["produtos"][$id]["quantidade"];
        }else{
            $_SESSION["carrinho"]["total"] = 0;
        }
    }
    
    if(!isset($_SESSION["carrinho"])) {
        echo "Nao tem nada no carrinho";
    } else {
        $dados["carrinho"] = $_SESSION["carrinho"]["produtos"];
        $dados["totalCarrinho"] = $_SESSION["carrinho"]["total"];
        exibir("produto/carrinho", $dados);
    }
    
}
/** anon */
function deletarCarrinho($id){
    
    foreach($_SESSION["carrinho"]["produtos"] as $chave => $produto) {
        
        if($id == $produto["idProduto"]) {
            //deleta esse kra!
            $produto = $_SESSION["carrinho"]["produtos"][$chave];
            $_SESSION["carrinho"]["total"] =  $_SESSION["carrinho"]["total"] - ($produto["preco"] * $produto["quantidade"]);
            unset($_SESSION["carrinho"]["produtos"][$chave]);  
        }
    }
    
    //print_r($_SESSION["carrinho"]);
    
        //unset($_SESSION["carrinho"][$id]);
    redirecionar("produto/listarCarrinho");
}

?>