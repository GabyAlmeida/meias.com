<?php

function adicionarPedido($idusuario,$idendereco, $idproduto,$datacompra) {
    $sql = "INSERT INTO pedido (idusuario,idendereco,idproduto,datacompra) 
			VALUES ('$idusuario','$idendereco', '$idproduto','$datacompra')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao fazer pedido' . mysqli_error($cnx)); }
    return 'Pedido feito com sucesso!';
}

