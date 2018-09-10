<?php
function adicionarProduto($preco,$nome,$descricao,$tamanho,$sexo,$categoria){
	$sql = "INSERT INTO produtos (preco, nomeproduto,descricao,tamanho,sexo,categoria) 
			VALUES ('$preco','$nome','$descricao','$tamanho','$sexo','$categoria')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar produto' . mysqli_error($cnx)); }
    return 'produto cadastrado com sucesso!';
}

function editarProduto($id,$preco,$nome,$descricao,$tamanho,$sexo,$categoria) {
    $sql = "UPDATE produtos SET preco = '$preco', nomeproduto = '$nome', descricao='$descricao', tamanho='$tamanho', sexo='$sexo', categoria='$categoria'  WHERE idproduto = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar produto' . mysqli_error($cnx)); }
    return 'Produto alterado com sucesso!';
}

function deletarProduto($id) {
    $sql = "DELETE FROM produtos WHERE idproduto = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar produto' . mysqli_error($cnx)); }
    return 'Produto deletado com sucesso!';
            
}


function selecionarTodosProdutos(){
	$sql="SELECT *  from produtos"; //SELECIONAR UM REGISTRO!!
	$retorno = mysqli_query(conn(),$sql);
	$produtos=array();
	while ($registros = mysqli_fetch_array($retorno)){
		$produtos[]=$registros;
	}

	return $produtos;
}

function buscarM($termoBusca){
	$sql="SELECT *  from  produtos WHERE nomeproduto LIKE '%$termoBusca%' or categoria LIKE '%$termoBusca%'"; //SELECIONAR TODOS OS REGISTROS!
	$retorno = mysqli_query(conn(),$sql);
	$produtos=array();
	while ($registros = mysqli_fetch_array($retorno)){
		$produtos[]=$registros;
	}

	return $produtos;
}

function selecionarAlgunsProdutos($id,$limi){
	$sql="SELECT *  from  produtos LIMIT $limi";
	$retorno = mysqli_query(conn(),$sql);


	$registros = mysqli_fetch_assoc($retorno);
}

function pegarProdutoPorId($id) {
    $sql = "SELECT * FROM produtos WHERE idproduto= $id";
    $resultado = mysqli_query(conn(), $sql);
    $produto = mysqli_fetch_array($resultado);
    return $produto;
}

function selectionProdutoCategoria($valorFiltro){
	$sql="SELECT  * from  produtos where $nomeFiltro='$valorFiltro'"; //SELECIONAR TODOS OS REGISTROS!

	$retorno = mysqli_query(conn(),$sql);



	$registros = mysqli_fetch_assoc($retorno);
}


?>