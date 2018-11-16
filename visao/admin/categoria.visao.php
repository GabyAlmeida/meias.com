
<h2>Produtos e suas categorias</h2>
<form action="<?=@$acao?>" method="POST">
 categoria:
    <select name="categoria">
        <option value="gotica" <?=@assinalarCampo($produto['categoria'], 'gotica')?>>Gótico suave</option>
        <option value="bela" <?=@assinalarCampo($produto['categoria'], 'bela')?>>Bela, recatada e do lar</option>
        <option value="diferente" <?=@assinalarCampo($produto['categoria'], 'diferente')?>>Diferentonas</option>
    </select>
    <button type="submit">Enviar</button>
</form>
<?php
if (!empty($produtos)){
?>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOME</th>
        </tr>
    </thead>
    <?php foreach ($produtos as $produto): ?>
    <tr>
        <td><?=$produto['idproduto']?></td>
        <td><?=$produto['nomeproduto']?></td>
    </tr>
    <?php endforeach; ?>
</table>
<?php } ?>