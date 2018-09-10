 

    <div id="fh5co-services" class="fh5co-bg-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 text-center">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
                        <span class="icon">
                            <i class="icon-credit-card"></i>
                        </span>
                        <h3>Credit Card</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
                        <p><a href="#" class="btn btn-primary btn-outline">Learn More</a></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 text-center">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
                        <span class="icon">
                            <i class="icon-wallet"></i>
                        </span>
                        <h3>Save Money</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
                        <p><a href="#" class="btn btn-primary btn-outline">Learn More</a></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 text-center">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
                        <span class="icon">
                            <i class="icon-paper-plane"></i>
                        </span>
                        <h3>Free Delivery</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
                        <p><a href="#" class="btn btn-primary btn-outline">Learn More</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<h2>Listar Produtos</h2>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>PRECO</th>
            <th>VIEW</th>
            <?php if (adminEstaLogado()): ?>
            <th>EDIT</th>
            <th>DELETE</th>
            <?php endif; ?>
        </tr>
    </thead>
    <?php foreach ($produtos as $produto): ?>
    <tr>
        <td><?=$produto['idproduto']?></td>
         <td><?=$produto['nomeproduto']?></td>
        <td><?=$produto['preco']?></td>
        <td><a href="./produto/visualizar/<?=$produto['idproduto']?>" class="btn btn-secondary">view</a></td>

        <?php if (adminEstaLogado()): ?>
            <td><a href="./produto/editar/<?=$produto['idproduto']?>" class="btn btn-info">edit</a></td>
            <td><a href="./produto/deletar/<?=$produto['idproduto']?>" class="btn btn-danger">del</a></td>
        <?php endif; ?>
    </tr>
    <?php endforeach; ?>
</table>
        <?php if (adminEstaLogado()): ?>
        <a href="./produto/adicionar" class="btn btn-primary">Adicionar novo produto</a>
        <?php endif; ?>
