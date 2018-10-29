<h2>Finalizar pedido :)</h2>
    
    <?php 
        $quantidade = 0;
        foreach ($carrinho as $produto): 
           $quantidade = $produto['quantidade']+ $quantidade;

     endforeach; 
     echo $quantidade." produtos comprados <br>";
      echo "O valor subtotal da compra é: " . $totalCarrinho; 
      ?>
<br>

<table border="2">
    <thead>
        <tr>
            <th>Total de produtos comprados</th>
            <td><</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>Subtotal</th>
            <td>fghdf</td>
        </tr>
      
    </tbody>
</table>

<p> endereço da compra: <p>
<br>
<br>
<a href="./produto" class="btn btn-primary">Comprar!</a><br>

