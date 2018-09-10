<?php

function pegarTodosUsuarios() {
    $sql = "SELECT * FROM usuario";
    $resultado = mysqli_query(conn(), $sql);
    $usuarios = array();
    while ($linha = mysqli_fetch_array($resultado)) {
        $usuarios[] = $linha;
    }
    return $usuarios;
}


function pegarUsuarioPorId($id) {
    $sql = "SELECT * FROM usuario WHERE idusuario= $id";
    $resultado = mysqli_query(conn(), $sql);
    $usuario = mysqli_fetch_array($resultado);
    return $usuario;
}

function adicionarUsuario($nome, $email, $senha,$cpf,$nascimento,$sexo) {
    $sql = "INSERT INTO usuario (nomeusuario, email,senha,cpf,datadenascimento,sexo, tipousuario) 
			VALUES ('$nome', '$email', '$senha','$cpf','$nascimento','$sexo','user')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar usuário' . mysqli_error($cnx)); }
    return 'Usuario cadastrado com sucesso!';
}

function editarUsuario($id,$nome, $email, $senha,$cpf,$nascimento,$sexo) {
    $sql = "UPDATE usuario SET nomeusuario = '$nome', email = '$email', senha='$senha', cpf='$cpf', datadenascimento='$nascimento', sexo='$sexo'  WHERE idusuario = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar usuário' . mysqli_error($cnx)); }
    return 'Usuário alterado com sucesso!';
}

function deletarUsuario($id) {
    $sql = "DELETE FROM usuario WHERE idusuario = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar usuário' . mysqli_error($cnx)); }
    return 'Usuario deletado com sucesso!';
            
}
