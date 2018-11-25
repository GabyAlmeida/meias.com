<?php
function adicionarProduto($preco,$nome,$descricao,$tamanho,$sexo,$categoria,$estoque){
	$sql = "INSERT INTO produtos (preco, nomeproduto,descricao,tamanho,sexo,categoria,estoque) 
			VALUES ('$preco','$nome','$descricao','$tamanho','$sexo','$categoria','$estoque')";

	if ( isset( $_FILES[ 'imagem' ][ 'name' ] ) && $_FILES[ 'imagem' ][ 'error' ] == 0 ) {
	$arquivo_tmp = $_FILES[ 'imagem' ][ 'tmp_name' ];
	$img = $_FILES[ 'imagem' ][ 'name' ];
	
	$extensao = pathinfo ( $img, PATHINFO_EXTENSION );
	
	$extensao = strtolower ( $extensao );

	if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {
		$novoNome = uniqid ( time () ) . '.' . $extensao;
		
		$destino = './publico/images/'.$novoNome;
		@move_uploaded_file ( $arquivo_tmp, $destino );
		$sql = "INSERT INTO produtos(preco,nomeproduto,descricao,tamanho,imagem,sexo,categoria,estoque)
		VALUES ('$preco','$nome', '$descricao','$tamanho','$destino','$sexo','$categoria','$estoque')";
	}
}

    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar produto' . mysqli_error($cnx)); }
    return 'produto cadastrado com sucesso!';
}

function editarProduto($id,$preco,$nome,$descricao,$tamanho,$sexo,$categoria,$estoque) {
    $sql = "UPDATE produtos SET preco = '$preco', nomeproduto = '$nome', descricao='$descricao', tamanho='$tamanho', sexo='$sexo', categoria='$categoria', estoque='$estoque'  WHERE idproduto = $id";
    
if ( isset( $_FILES[ 'imagem' ][ 'name' ] ) && $_FILES[ 'imagem' ][ 'error' ] == 0 ) {
	$arquivo_tmp = $_FILES[ 'imagem' ][ 'tmp_name' ];
	$img = $_FILES[ 'imagem' ][ 'name' ];
	
	$extensao = pathinfo ( $img, PATHINFO_EXTENSION );
	
	$extensao = strtolower ( $extensao );

	if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {
		$novoNome = uniqid ( time () ) . '.' . $extensao;
		
		$destino = './publico/images/'.$novoNome;
		@move_uploaded_file ( $arquivo_tmp, $destino );
		$sql = "INSERT INTO produtos(preco,nomeproduto,descricao,tamanho,imagem,sexo,categoria,estoque)
		VALUES ('$preco','$nome', '$descricao','$tamanho','$destino','$sexo','$categoria',$estoque')";
	}
}

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

function selecionarProdutosEstoque(){
	$sql="SELECT pro.idproduto, pro.nomeproduto, es.qtde from produtos pro INNER JOIN estoque es ON es.id_produto=pro.idproduto"; //SELECIONAR UM REGISTRO!!
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


function selecionarAlgunsProdutos($limi){
	$sql="SELECT *  from produtos produtos LIMIT $limi"; //SELECIONAR UM REGISTRO!!
	$retorno = mysqli_query(conn(),$sql);
	$produtos=array();
	while ($registros = mysqli_fetch_array($retorno)){
		$produtos[]=$registros;
	}

	return $produtos;
}


function pegarProdutoPorId($id) {
    $sql = "SELECT * FROM produtos WHERE idproduto= $id";
    $resultado = mysqli_query(conn(), $sql);
    $produto = mysqli_fetch_array($resultado);
    return $produto;
}

function selecionarProdutoCategoria($nomeFiltro,$valorFiltro){
	$sql="SELECT  * from  produtos where $nomeFiltro='$valorFiltro'"; //SELECIONAR TODOS OS REGISTROS!

	$retorno = mysqli_query(conn(),$sql);
	$produtos=array();
	while ($registros = mysqli_fetch_array($retorno)){
		$produtos[]=$registros;
	}

	return $produtos;
}

function pegarVariosProdutosPorId($carrinhoProdutos){
			for ($i=0; $i < count($carrinhoProdutos); $i++) {
				$id = $carrinhoProdutos[$i];
				$comando 	= "SELECT * FROM produtos WHERE idproduto = '$id'";
				$query 	= mysqli_query($cnx = conn(),$comando); 
				
				if(!$query) {
					die(mysqli_error($cnx));
				}
				$produtos[] = mysqli_fetch_assoc($query); 
			}
			if(!empty($produtos)){
				return $produtos;
			}
		}

?>