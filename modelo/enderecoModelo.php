<?php
function adicionarEndereco($idusuario,$rua,$bairro,$cidade,$cep){
    $rua= mysqli_real_escape_string(conn(),$rua);
    $bairro= mysqli_real_escape_string(conn(),$bairro);
    $cidade= mysqli_real_escape_string(conn(),$cidade);
    $cep= mysqli_real_escape_string(conn(),$cep);
	$sql = "INSERT INTO endereco (idusuario,rua,bairro,cidade,cep) 
			VALUES ('$idusuario','$rua','$bairro','$cidade','$cep')";
        
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar endereço' . mysqli_error($cnx)); }
    return 'endereço cadastrado com sucesso!';
}


function pegarTodosEnderecos() {
    $sql = "SELECT * FROM endereco";
    $resultado = mysqli_query(conn(), $sql);
    $enderecos = array();
    while ($linha = mysqli_fetch_array($resultado)) {
        $enderecos[] = $linha;
    }
    return $enderecos;
}

function pegarEnderecoPorId($id) {
    $sql = "SELECT * FROM endereco WHERE idendereco = $id";
    $resultado = mysqli_query(conn(), $sql);
    $endereco = mysqli_fetch_assoc($resultado);
    return $endereco;
}

function editarEndereco($id,$rua,$bairro,$cidade,$cep) {
    $rua= mysqli_real_escape_string(conn(),$rua);
    $bairro= mysqli_real_escape_string(conn(),$bairro);
    $cidade= mysqli_real_escape_string(conn(),$cidade);
    $cep= mysqli_real_escape_string(conn(),$cep);
    $sql = "UPDATE endereco SET rua = '$rua', bairro = '$bairro', cidade='$cidade', cep='$cep' WHERE idendereco = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar endereco' . mysqli_error($cnx)); }
    return 'Endereco alterado com sucesso!';
}
function deletarEndereco($id) {
    $sql = "DELETE FROM endereco WHERE idendereco = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar endereço' . mysqli_error($cnx)); }
    return 'Endereço deletado com sucesso!';
            
}

function pegarEndereco($id) {
    $sql = "SELECT * FROM endereco WHERE idusuario= $id";
    $resultado = mysqli_query(conn(), $sql);
    $enderecos = array();
    while ($linha = mysqli_fetch_array($resultado)) {
        $enderecos[] = $linha;
    }
    return $enderecos;
}


?>
