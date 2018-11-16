<h2>Lista de pedidos por municipio</h2>
<form action="<?=@$acao?>" method="POST">
 Escreva o nome do municipio <input name="municipio" type="text">

    <button type="submit">Enviar</button>
</form>
<?php
if (!empty($pedidos)){
?>
<table class="table">
    <thead>
        <tr>
            <th>ID PEDIDO</th>
            <th>ID USUARIO</th>
            <th>ID ENDEREÇO</th>
            <th>DATA DA COMPRA</th>
            <th>VALOR</th>
        </tr>
    </thead>
    <?php foreach ($pedidos as $pedido): ?>
    <tr>
        <td><?=$pedido['idpedido']?></td>
        <td><?=$pedido['idusuario']?></td>
        <td><?=$pedido['idendereco']?></td>
        <td><?=$pedido['datacompra']?></td>
        <td><?=$pedido['valortotal']?></td>
    </tr>
    <?php endforeach; ?>
</table>
<?php } ?>
