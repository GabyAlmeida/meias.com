<?php

function adicionarPedido($idusuario, $idproduto,$datacompra) {
    $sql = "INSERT INTO pedido (idusuario, idproduto,datacompra) 
			VALUES ('$idusuario', '$idproduto','$datacompra')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao fazer pedido' . mysqli_error($cnx)); }
    return 'Pedido feito com sucesso!';
}

