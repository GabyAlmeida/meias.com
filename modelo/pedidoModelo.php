<?php

function adicionarPedido($idusuario,$idendereco,$datacompra,$tot) {
    $sql = "INSERT INTO pedido (idusuario,idendereco,datacompra,valortotal) 
			VALUES ('$idusuario','$idendereco','$datacompra','$tot')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao fazer pedido' . mysqli_error($cnx)); }
    return 'Pedido feito com sucesso!';
}
function produtoPedido($idproduto,$idpedido,$quantidade) {
    $sql = "INSERT INTO pedido (idproduto,idpedido,quantidade) 
			VALUES ('$idproduto','$idpedido','$quantidade')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao fazer produto_pedido' . mysqli_error($cnx)); }
    return 'produto_pedido feito com sucesso!';
}

