<?php
function manipulacao (){
	$arquivo= fopen ("C:/xampp/htdocs/projeto/servicos/manipulacao.txt", "r");
	$dados= array();
	while (!feof($arquivo)){
		$dados[]=trim(fgets($arquivo));
	}
	return $dados;
}
?>
