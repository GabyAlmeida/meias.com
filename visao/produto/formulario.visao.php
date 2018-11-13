<h1>Adicionar Produto</h1>	
<form action="<?=@$acao?>" method="POST">
    nome: <input type="text" name="nome" value="<?=@$produto['nomeproduto']?>"><br>
    descricao: <input type="text" name="descricao" value="<?=@$produto['descricao']?>"><br>
    preco: <input type="number" name="preco" step="0.01" value="<?=@$produto['preco']?>"><br>
    quantidade em estoque: <input type="number" name="estoque" step="0.01" value="<?=@$produto['estoque']?>"><br>
    tamanho:
    <select name="tamanho">
        <option value="p" <?=@assinalarCampo($produto['tamanho'], 'p')?>>Pequeno</option>
        <option value="m" <?=@assinalarCampo($produto['tamanho'], 'm')?>>Medio</option>
        <option value="g" <?=@assinalarCampo($produto['tamanho'], 'g')?>>Grande</option>
    </select><br>
    sexo:
     <select name="sexo">
        <option value="m" <?=@assinalarCampo($produto['sexo'], 'm')?>>Masculino</option>
        <option value="f" <?=@assinalarCampo($produto['sexo'], 'f')?>>Feminino</option>
    </select><br>

      categoria:
    <select name="categoria">
        <option value="gotica" <?=@assinalarCampo($produto['categoria'], 'gotica')?>>Gótico suave</option>
        <option value="bela" <?=@assinalarCampo($produto['categoria'], 'bela')?>>Bela, recatada e do lar</option>
        <option value="diferente" <?=@assinalarCampo($produto['categoria'], 'diferente')?>>Diferentonas</option>
    </select><br>
   Imagem: <input type="file" name="imagem" required><br>
    <button type="submit">Enviar</button>
</form>