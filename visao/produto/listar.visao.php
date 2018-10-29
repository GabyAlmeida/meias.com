 
    <div id="fh5co-services" class="fh5co-bg-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 text-center">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
                        <span class="icon">
                            <i class="icon-credit-card"></i>
                        </span>
                        <h3>Aceitamos Cartão!</h3>
                        <p>Lorem ipsum placerat nulla ut habitasse velit pharetra fermentum primis, felis scelerisque sagittis nibh eu fermentum accumsan dolor, pulvinar posuere condimentum quisque eleifend in donec commodo. semper facilisis senectus varius sagittis interdum ligula aliquam vel bibendum leo nullam lorem. </p>
                        <p><a href="#" class="btn btn-primary btn-outline">Learn More</a></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 text-center">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
                        <span class="icon">
                            <i class="icon-wallet"></i>
                        </span>
                        <h3>Preços camaradas!</h3>
                        <p>Lorem ipsum placerat nulla ut habitasse velit pharetra fermentum primis, felis scelerisque sagittis nibh eu fermentum accumsan dolor, pulvinar posuere condimentum quisque eleifend in donec commodo. semper facilisis senectus varius sagittis interdum ligula aliquam vel bibendum leo nullam lorem.</p>
                        <p><a href="#" class="btn btn-primary btn-outline">Learn More</a></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 text-center">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
                        <span class="icon">
                            <i class="icon-paper-plane"></i>
                        </span>
                        <h3>Frete gratis!</h3>
                        <p>Lorem ipsum placerat nulla ut habitasse velit pharetra fermentum primis, felis scelerisque sagittis nibh eu fermentum accumsan dolor, pulvinar posuere condimentum quisque eleifend in donec commodo. semper facilisis senectus varius sagittis interdum ligula aliquam vel bibendum leo nullam lorem.</p>
                        <p><a href="#" class="btn btn-primary btn-outline">Learn More</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
 <div id="fh5co-product">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <span>Os Mais Cool</span>
                    <h2>Products.</h2>
                    <p>As meias mais daoras de todo universo agora a um click de distância ;)</p>
                </div>
            </div>
<div class="row">
    <?php foreach ($produtos as $produto): ?>
                <div class="col-md-4 text-center animate-box">
                    <div class="product">
                        <div class="product-grid" style="background-image:url(<?=$produto['imagem']?>);">
                            <div class="inner">
                                <p>
                                    <a href="./produto/addCarrinho/<?=$produto['idproduto']?>/<?=$produto['nomeproduto']?>/<?=$produto['preco']?>" class="icon"><i class="icon-shopping-cart"></i></a>
                                    <a href="./produto/visualizar/<?=$produto['idproduto']?>" class="icon"><i class="icon-eye"></i></a>
                                </p>
                            </div>
                        </div>
                        <div class="desc">
                            <h3><a ></a><?=$produto['nomeproduto']?></h3>
                            <span class="price">RS<?=$produto['preco']?></span>
                            <?php if (adminEstaLogado()): ?>
                                <h4><a href="./produto/editar/<?=$produto['idproduto']?>" class="btn btn-info">edit</a></h4>

                                <h4><a href="./produto/deletar/<?=$produto['idproduto']?>" class="btn btn-danger">del</a></h4>
                                <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
          </div>
        </div>

<?php if (adminEstaLogado()): ?>
    <a href="./produto/adicionar" class="btn btn-primary">Adicionar novo produto</a>
<?php endif; ?>


</div>