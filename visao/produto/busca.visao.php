<div class="row">
    <?php foreach ($produtos as $produto): ?>
                <div class="col-md-4 text-center animate-box">
                    <div class="product">
                        <div class="product-grid" style="background-image:url(<?=$produto['imagem']?>);">
                            <div class="inner">
                                <p>
                                    <a href="./carrinho/adicionar/<?=$produto['idproduto']?>" class="icon"><i class="icon-shopping-cart"></i></a>
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
