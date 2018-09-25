

					<h3>CARRINHO DE COMPRAS </h3>
			
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
								 <td><?=$produto['nomeproduto']?></td>
								 <td><?=$produto['preco']?></td>
								<td><a href="<?='carrinho/deletar/' . $i?>">excluir</a></td>
							</tr>
						<?php 
							$i++;}
							}else{
								echo "<h4 class='text-center'>Não há produtos existentes no seu carrinho!</h4>";
							}
						?>

					</table>
