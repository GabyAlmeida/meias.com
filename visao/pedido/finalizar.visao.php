<h2>Finalizar pedido :)</h2>
    
    <?php 
       $desconto=0;
       if(!empty($cupom)){
           $desconto=$cupom['desconto'];
       }
        $quantidade = 0;
        foreach ($carrinho as $produto): 
           $quantidade = $produto['quantidade']+ $quantidade;
            
     endforeach; 
     $descont= ($totalCarrinho*$desconto)/100;
     $total=$totalCarrinho-$descont;
      ?>
<br>

<table class="table">
 
        <tr>
            <th>TOTAL DE PRODUTOS COMPRADOS</th>
            <td> <?=$quantidade?></td>
        </tr>
 

        <tr>
            <th>SUBTOTAL</th>
            <td> R$ <?= $totalCarrinho?></td>
        </tr>
        
        <tr>
            <th>DESCONTO</th>
            <td><?= $desconto?>%</td>
        </tr>
        
        <tr>
            <th>TOTAL</th>
            <td> R$ <?= $total?></td>
        </tr>
      
 
</table>

<h3>Endereço</h3><br>
<?php if(!empty($enderecoSelecionado)){ ?>
<table class="table">
    <thead>
        <tr>
            <th>RUA</th>
            <th>BAIRRO</th>
            <th>CIDADE</th>
            <th>CEP</th>
        </tr>
    </thead>
    <tr>
        <td><?=$enderecoSelecionado['rua']?></td>
        <td><?=$enderecoSelecionado['bairro']?></td>
        <td><?=$enderecoSelecionado['cidade']?></td>
        <td><?=$enderecoSelecionado['cep']?></td>
    </tr>

</table>
<p><a href="endereco/selecionar/" class="">Trocar endereço de entrega</a></p>
<?php }else{ ?>
<p><a href="endereco/selecionar/" class="">Selecionar endereço de entrega</a></p>
<?php } ?>
<h3>Tem cupom de desconto? Manda aí!</h3>
<form action="./cupom/buscar/" method="POST">
    <input type="text" name="cupom" value="">
    <button type="submit" >Ok!</button>
</form>
<h4>**só vale um cupom por vez meu brother<h4><br>

    <h3>Selecione a forma de pagamento</h3>    
    <form>
<input type="radio" name="pagamento" value="cartao"> Cartão de credito
<br>
<input type="radio" name="pagamento" value="boleto"> Boleto
<br>
<input type="radio" name="pagamento" value="debito"> Debito
</form>
    
<a href="./pedido" class="btn btn-primary">Comprar</a>