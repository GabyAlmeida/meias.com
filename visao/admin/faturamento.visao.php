<h2>Faturamento</h2>
<form action="<?=@$acao?>" method="POST">
Periodo de <input name="inicio" type="date">
 a <input name="fim" type="date">
    <button type="submit">Enviar</button>
</form>
<?php
if (!empty($pedidos)){
    $total=0;
     foreach ($pedidos as $pedido):
         $total+= $pedido['valortotal'];
     endforeach;
?>
<table class="table">
    <thead>
        <tr>
            <th>INTERVALO</th>
            <th>FATURAMENTO</th>
        </tr>
    </thead>
    <tr>
        <td><?=$inicio?> à <?=$fim?></td>
        <td>R$ <?=$total?></td>
    </tr>
</table>
<?php } ?>
