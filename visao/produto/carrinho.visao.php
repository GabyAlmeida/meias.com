

					<h1>CARRINHO DE COMPRAS </h1>
			
				<?php if (isset($produtos)) { ?>
					<table class="table">
						<tr>
							<th>PRODUTO</th>
							<th>PREÇO</th>
							<th>Excluir</th>
						</tr>	

						<?php 
							$i = 0;
							foreach ($produtos as $produto) {

						?>
							<tr>		
								 <td><?=$produto['idproduto']?></td>
								<td></td>
								 <td><?=$produto['preco']?></td>
								<td><a href="<?='carrinho/deletar/' . $i?>">excluir</a></td>
							</tr>
						<?php 
							$i++;}
							}else{
								echo "<h1 class='text-center'>Não há produtos existentes no seu carrinho!</h1>";
							}
						?>

					</table>
