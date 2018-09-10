<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>PRECO</th>
            <th>VIEW</th>
            <?php if (adminEstaLogado()): ?>
            <th>EDIT</th>
            <th>DELETE</th>
            <?php endif; ?>
        </tr>
    </thead>
    <?php foreach ($produtos as $produto): ?>
    <tr>
        <td><?=$produto['idproduto']?></td>
         <td><?=$produto['nomeproduto']?></td>
        <td><?=$produto['preco']?></td>
        <td><a href="./produto/visualizar/<?=$produto['idproduto']?>" class="btn btn-secondary">view</a></td>

        <?php if (adminEstaLogado()): ?>
            <td><a href="./produto/editar/<?=$produto['idproduto']?>" class="btn btn-info">edit</a></td>
            <td><a href="./produto/deletar/<?=$produto['idproduto']?>" class="btn btn-danger">del</a></td>
        <?php endif; ?>
    </tr>
    <?php endforeach; ?>
</table>