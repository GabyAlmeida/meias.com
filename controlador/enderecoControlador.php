
<?php
/** anon,admin,user */
function listar() {
    $dados['enderecos'] = selecionarEnderecos();
    exibir("endereco/listar");
}

/** admin,user */
function adicionar() {
    if (ehPost()) {
        extract($_POST);
        alert(adicionarEndereco($nome,$rua,$bairro,$cidade,$cep));
        redirecionar("endereco/index");
    } else {
        exibir("endereco/formulario");
    }
}
