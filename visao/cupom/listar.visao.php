<h2>Cupons</h2>
<table class="table">
    <thead>
        <tr>
            <th>Cupom</th>
            <th>Desconto</th>
            <th>DELETE</th>
        </tr>
    </thead>
    <?php foreach ($cupons as $cupom): ?>
    <tr>
        <td><?=$cupom['nomecupom']?></td>
        <td><?=$cupom['desconto']?></td>
        <td><a href="./cupom/deletar/<?=$cupom['idcupom']?>" class="btn btn-danger">del</a></td>
    </tr>
    <?php endforeach; ?>
</table>

<a href="./cupom/adicionar" class="btn btn-primary">Adicionar novo cupom</a>