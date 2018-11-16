<?php

require "modelo/usuarioModelo.php";
require "modelo/validacaoModelo.php";
/** admin,user */
function index() {
    redirecionar("produto/index");
}

/** admin,user */
function comum(){
     $usuarioLogado = pegarUsuarioLogado();
      $usuarios = array();
      $usuarios[] = $usuarioLogado;
      $dados["usuarios"] = $usuarios;
      
      exibir("usuario/listar",$dados);
}
/** admin*/
function admin(){
     $dados["usuarios"] = pegarTodosUsuarios();
     exibir("usuario/admin", $dados);
}

/** anon */
function adicionar() {
    if (ehPost()) {
        extract($_POST);
        $erros = array();

        $erros[] = validar_email($email);
        $erros[] = validar_nome($nome);
        $erros[]= validar_cpf($cpf);
        $erros[]=validar_senha($senha,$confirmacao_senha);
        $erros[]= validar_data($nascimento);

        $controle = true;

        foreach ($erros as $validacao) {
            if($validacao !== true) {
                alert ($validacao);
                redirecionar("usuario/adicionar");
                $controle = false;    
            }
        }
        if($controle) {
            alert(adicionarUsuario($nome, $email, $senha,$cpf,$nascimento,$sexo));
            redirecionar("usuario/index");
        } 
    }else {
            exibir("usuario/formulario");
        }
}

/** admin, user */
function deletar($id) {
    alert(deletarUsuario($id));
    redirecionar("usuario/index");
}


/** admin,user */
function editar($id) {
    if (ehPost()) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha=$_POST["senha"];
        $cpf=$_POST["cpf"];
        $nascimento=$_POST["nascimento"];
        $sexo=$_POST["sexo"];
        alert(editarUsuario($id, $nome, $email, $senha,$cpf,$nascimento,$sexo));
        redirecionar("usuario/index");
    } else {
        $dados['usuario'] = pegarUsuarioPorId($id);
        $dados['acao'] = "./usuario/editar/$id";
        exibir("usuario/formulario", $dados);
    }
}

/** user, admin */
function visualizar($id) {
    $dados['usuario'] = pegarUsuarioPorId($id);
    exibir("usuario/visualizar", $dados);
}





