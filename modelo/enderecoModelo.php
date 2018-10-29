<?php
function adicionarEndereco($nome,$rua,$bairro,$cidade,$cep){
	$sql = "INSERT INTO endereco (nome,rua,bairro,cidade,cep) 
			VALUES ('$nome','$rua','$bairro','$cidade','$cep')";
        
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar endereço' . mysqli_error($cnx)); }
    return 'endereço cadastrado com sucesso!';
}
?>
