<?php

function adicionarPedido($idusuario,$idendereco,$datacompra,$tot) {
    $sql = "INSERT INTO pedido (idusuario,idendereco,datacompra,valortotal) 
			VALUES ('$idusuario','$idendereco','$datacompra','$tot')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    $id = mysqli_insert_id($cnx);
    if(!$resultado) { die('Erro ao fazer pedido' . mysqli_error($cnx)); }
    return $id;
}
function produtoPedido($idproduto,$idpedido,$quantidade) {
    $sql = "INSERT INTO pedido_produto (idproduto,idpedido,quantidade) 
			VALUES ('$idproduto','$idpedido','$quantidade')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao fazer produto_pedido' . mysqli_error($cnx)); }
    return ' produto_pedido feito com sucesso!';
}

function selecionarPedidoPeriodo($inicio,$fim){
	$sql="SELECT *  from  pedido WHERE datacompra>='$inicio'and datacompra<='$fim'"; 
	$retorno = mysqli_query(conn(),$sql);
	$pedidos=array();
	while ($registros = mysqli_fetch_array($retorno)){
		$pedidos[]=$registros;
	}

	return $pedidos;
}

function selecionarPedidoMunicipio($municipio){
	$sql="select * from pedido p inner join endereco d on (p.idendereco= d.idendereco)where d.cidade LIKE '%$municipio%'"; 
	$retorno = mysqli_query(conn(),$sql);
	$pedidos=array();
	while ($registros = mysqli_fetch_array($retorno)){
		$pedidos[]=$registros;
        }
	return $pedidos;
}

