<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(<?=$produtos['imagem']?>);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Detalhes do produto</h1>
							<h2><?=$produtos['nomeproduto']?> </h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-product">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 animate-box">
					<div class="owl-carousel owl-carousel-fullwidth product-carousel">
						<div class="item">
							<div class="active text-center">
								<figure>
									<img src="<?=$produtos['imagem']?>" alt="user">
								</figure>
							</div>
						</div>
						<div class="item">
							<div class="active text-center">
								<figure>
									<img src="<?=$produtos['imagem']?>" alt="user">
								</figure>
							</div>
						</div>
						<div class="item">
							<div class="active text-center">
								<figure>
									<img src="<?=$produtos['imagem']?>" alt="user">
								</figure>
							</div>
						</div>
				

					</div>
					<div class="row animate-box">
						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
							<h2><?=$produtos['nomeproduto']?></h2>
							<p>
								<a href="#" class="btn btn-primary btn-outline btn-lg">Adicionar ao carrinho</a>
								<a href="#" class="btn btn-primary btn-outline btn-lg">Comprar</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="fh5co-tabs animate-box">
						<ul class="fh5co-tab-nav">
							<li class="active"><a href="#" data-tab="1"><span class="icon visible-xs"><i class="icon-file"></i></span><span class="hidden-xs">Detalhes do produto</span></a></li>
							<li><a href="#" data-tab="2"><span class="icon visible-xs"><i class="icon-bar-graph"></i></span><span class="hidden-xs">Especificações</span></a></li>
							<li><a href="#" data-tab="3"><span class="icon visible-xs"><i class="icon-star"></i></span><span class="hidden-xs">Feedbacks :)</span></a></li>
						</ul>

						<!-- Tabs -->
						<div class="fh5co-tab-content-wrap">

							<div class="fh5co-tab-content tab-content active" data-tab-content="1">
								<div class="col-md-10 col-md-offset-1">
									<span class="price">RS:<?=$produtos['preco']?></span>
									<h2><?=$produtos['nomeproduto']?></h2>
									<p><?=$produtos['descricao']?></p>


								</div>
							</div>

							<div class="fh5co-tab-content tab-content" data-tab-content="2">
								<div class="col-md-10 col-md-offset-1">
									<h3>Especificações do produto</h3>
									<ul>
										<li>ID: <?=$produtos['idproduto']?></li>
										<li>Nome: <?=$produtos['nomeproduto']?></li>
										<li>Preço: <?=$produtos['preco']?></li>
										<li>Tamanho: <?=$produtos['tamanho']?></li>
										<li>Sexo: <?=$produtos['sexo']?></li>
										<li>Categoria: <?=$produtos['categoria']?></li>
									</ul>
								</div>
							</div>

							<div class="fh5co-tab-content tab-content" data-tab-content="3">
								<div class="col-md-10 col-md-offset-1">
									<h3>eles recomendam</h3>
									<div class="feed">
										<div>
											<blockquote>
												<p>blablablablablablablablablablablablablablablablablablablablablablablablablablabla.</p>
											</blockquote>
											<h3>&mdash; usuario de vdd</h3>
											<span class="rate">
												<i class="icon-star2"></i>
												<i class="icon-star2"></i>
												<i class="icon-star2"></i>
												<i class="icon-star2"></i>
												<i class="icon-star2"></i>
											</span>
										</div>
										
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
