<h2>Meu User :)</h2>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>EMAIL</th>
            <th>VIEW</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
    </thead>
    <?php foreach ($usuarios as $usuario): ?>
    <tr>
        <td><?=$usuario['idusuario']?></td>
        <td><?=$usuario['nomeusuario']?></td>
        <td><?=$usuario['email']?></td>
        <td><a href="./usuario/visualizar/<?=$usuario['idusuario']?>" class="btn btn-secondary">view</a></td>
        <td><a href="./usuario/editar/<?=$usuario['idusuario']?>" class="btn btn-info">edit</a></td>
        <td><a href="./usuario/deletar/<?=$usuario['idusuario']?>" class="btn btn-danger">del</a></td>
    </tr>
    <?php endforeach; ?>
</table>

<a href="./endereco/mostrar" class="btn btn-primary">Meus endereços</a>
<a href="./usuario/adicionar" class="btn btn-primary">Adicionar novo usuario</a>

