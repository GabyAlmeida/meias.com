
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-xs-2">
					<div id="fh5co-logo"><a href="./">meias.com</a></div>
				</div>
				<div class="col-md-6 col-xs-6 text-center menu-1">
					<ul>
						<li><a href="./">Principal</a></li>
						<li class="has-dropdown">
							<a href="#">produtos</a>
							<ul class="dropdown">
								<li><a href="./produto/listarTodos">Todos os Produtos</a></li>
								<li><a href="./produto/listarCategoria/sexo/masc">Masculino</a></li>
								<li><a href="./produto/listarCategoria/sexo/femi">Feminino</a></li>
								<li><a href="./produto/listarCategoria/sexo/kids">Kids</a></li>
							</ul>
						</li>
						<li class="has-dropdown">
							<a href="#">Categorias</a>
							<ul class="dropdown">
								<li><a href="./produto/listarCategoria/categoria/bela">Bela,recatada e do lar</a></li>
								<li><a href="./produto/listarCategoria/categoria/diferente">diferentonas</a></li>
								<li><a href="./produto/listarCategoria/categoria/gotica">gotica suave</a></li>
							</ul>
						</li>
						<?php if (adminestaLogado()){ ?>
						<li><a href="./usuario/index">area admin</a></li>
						<?php } ?>
						<?php if (userestaLogado()){ ?>
						<li><a href="./usuario/index">area usuario</a></li>
						<?php } ?>
						<?php if (estaLogado()){ ?>
						<li><a href="./login/logout">sair</a></li>
						<?php }else{ ?>
						<li><a href="./login">login</a></li>
						<li><a href="./usuario/adicionar">cadatre-se :)</a></li>
						<?php } ?>
					</ul>
				</div>
				<div class="col-md-3 col-xs-4 text-right hidden-xs menu-2">
					<ul>
						<li class="search">
							<div class="input-group">
							  <form method="post" action="./produto/buscar"> 
						      <input name="termo" type="text" placeholder="Search..">
						      <span class="input-group-btn">
						        <button  class="btn btn-primary" type="button"><i class="icon-search"></i></button>
						      </span>
						      </form>
						    </div>
						</li>
						<li class="shopping-cart"><a href="./produto/carrinho" class="cart"><span><small>0</small><i class="icon-shopping-cart"></i></span></a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>