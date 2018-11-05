<H3>Endereço de Entrega: </H3>
<form action="<?=@$acao?>" method="POST">
    Rua: <input type="text" name="rua" value="<?=@$endereco['rua']?>"><br>
    Bairro:  <input type="text" name="bairro" value="<?=@$endereco['bairro']?>"><br>
    Cidade:  <input type="text" name="cidade" value="<?=@$endereco['cidade']?>"><br>
    CEP:  <input type="text" name="cep" value="<?=@$endereco['cep']?>"><br>
    <button type="submit">Enviar</button>
</form>