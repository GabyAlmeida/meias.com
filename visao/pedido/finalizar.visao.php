<h2>Finalizar pedido :)</h2>
    
    <?php 
        $quantidade = 0;
        foreach ($carrinho as $produto): 
           $quantidade = $produto['quantidade']+ $quantidade;

     endforeach; 
      ?>
<br>

<table class="table">
    <thead>
        <tr>
            <th>TOTAL DE PRODUTOS COMPRADOS</th>
            <td> <?=$quantidade ?></td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>SUBTOTAL</th>
            <td> <?= $totalCarrinho?></td>
        </tr>
      
    </tbody>
</table>

<h3>Endereço</h3><br>
<p><a href="endereco/adicionar/" class="">Alterar endereço</a></p>
