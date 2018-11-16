<?php

function adicionarCupom($cupom, $desconto) {
    $sql = "INSERT INTO cupom (nomecupom, desconto) 
			VALUES ('$cupom','$desconto')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if (!$resultado) {
        die('Erro ao cadastrar cupom' . mysqli_error($cnx));
    }
    return 'Cupom cadastrado com sucesso!';
}

function selecionarTodosCupons() {
    $sql = "SELECT * FROM cupom";
    $resultado = mysqli_query(conn(), $sql);
    $cupons = array();
    while ($linha = mysqli_fetch_array($resultado)) {
        $cupons[] = $linha;
    }
    return $cupons;
}

function deletarCupom($id) {
    $sql = "DELETE FROM cupom WHERE idcupom = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if (!$resultado) {
        die('Erro ao deletar cupom' . mysqli_error($cnx));
    }
    return 'Cupom deletado com sucesso!';
}

function buscarCupom($termoBusca) {
    $termoBusca= mysqli_real_escape_string(conn(),$termoBusca);
    $sql = "SELECT desconto  from  cupom WHERE nomecupom='$termoBusca'"; //SELECIONAR TODOS OS REGISTROS!
    $retorno = mysqli_query(conn(), $sql);
    $cupom = mysqli_fetch_assoc($retorno);
    return $cupom;
}
