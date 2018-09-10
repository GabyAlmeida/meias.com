<form action="<?=@$acao?>" method="POST">
    nome: <input type="text" name="nome" value="<?=@$usuario['nomeusuario']?>"><br>
    email: <input type="text" name="email" value="<?=@$usuario['email']?>"><br>
     sexo:
    <select name="sexo">
        <option value="m" <?=@assinalarCampo($usuario['sexo'], 'm')?>>Masculino</option>
        <option value="f" <?=@assinalarCampo($usuario['sexo'], 'f')?>>Feminino</option>
    </select><br>
    senha: <input type="text" name="senha" value="<?=@$usuario['senha']?>"><br>

    cpf: <input type="text" name="cpf" value="<?=@$usuario['cpf']?>"><br>

    data de nascimento: <input type="text" name="nascimento" value="<?=@$usuario['datadenascimento']?>"><br>

    <button type="submit">Enviar</button>
</form>