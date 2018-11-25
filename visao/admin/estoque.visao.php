
<h2>Nosso estoque</h2>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>ESTOQUE</th>
        </tr>
    </thead>
    <?php foreach ($produtos as $produto): ?>
    <tr>
        <td><?=$produto['idproduto']?></td>
        <td><?=$produto['nomeproduto']?></td>
        <td><?=$produto['qtde']?></td>
    </tr>
    <?php endforeach; ?>
</table>

