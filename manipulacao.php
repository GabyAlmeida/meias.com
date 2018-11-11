<?php
    $arquivo='manipulacao.txt';
$aux=0;
$arquivoAberto= fopen($arquivo,'r');
while (!feof($arquivoAberto)) {
    $teste = explode(",",fgets($arquivoAberto));
    $aux=$aux+1;
    if($aux==1){
      $_SESSION['credenciais']=$teste;
    }
}
fclose($arquivoAberto);
echo "<pre>";
print_r($_SESSION['credenciais']);