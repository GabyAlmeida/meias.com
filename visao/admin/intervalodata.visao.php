<h2>Lista de pedidos realizados entre um intervalo de datas</h2>
<form action="<?=@$acao?>" method="POST">
 Pedidos realizados de <input name="inicio" type="date">
 a <input name="fim" type="date">
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