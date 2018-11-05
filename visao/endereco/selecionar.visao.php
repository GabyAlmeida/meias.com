<h2>Selecione um endereço</h2>
<table class="table">
    <thead>
        <tr>
            <th>RUA</th>
            <th>BAIRRO</th>
            <th>CIDADE</th>
            <th>CEP</th>
        </tr>
    </thead>
    <?php
    foreach ($endereco as $enderecos): ?>
    <tr>
        <td><?=$endereco['rua']?></td>
        <td><?=$endereco['bairro']?></td>
        <td><?=$endereco['cidade']?></td>
        <td><?=$endereco['cep']?></td>
        <td><a href="./endereco/esse/<?=$endereco['idendereco']?>" class="btn btn-info">Quero esse</a></td>
    </tr>
    <?php endforeach; ?>
</table>

