<?php

function validar_email($email){
	$email=strip_tags($email);
	if (strlen(trim ($email)) == 0) {
		return "Você deve inserir um e-mail."."<br>";
	}elseif (!filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)){
		return "E-Mail is not valid brother"."<br>";
	}else{
		return true;
	}

}

function validar_nome($nome){
	$nome=strip_tags($nome);
	if(!is_numeric($nome)){
		if (strlen(trim ($nome)) <= 3) {
			return "Preencha o campo nome com no minimo 3 caracteres."."<br>";
		}
	}else{
		return "preencha o campo nome apenas com texto<br>";
	}

	return true;
}


function validar_cpf($cpf){
	$cpf=strip_tags($cpf);
	if ((strlen(trim ($cpf))<8)||(strlen(trim ($cpf))>16)) {
		return "Preencha o campo CPF <br>";
	}else{	
		$cpf = str_pad(preg_replace('/[^0-9]/', '', $cpf), 11, '0', STR_PAD_LEFT);
	// Verifica se nenhuma das sequências abaixo foi digitada, caso seja, retorna falso
		if ( strlen($cpf) != 11 || $cpf == '00000000000' || $cpf == '11111111111' || $cpf == '22222222222' || $cpf == '33333333333' || $cpf == '44444444444' || $cpf == '55555555555' || $cpf == '66666666666' || $cpf == '77777777777' || $cpf == '88888888888' || $cpf == '99999999999') {
			return "cpf invalido<br>";
		} else { 
                // Calcula os números para verificar se o CPF é verdadeiro
			for ($t = 9; $t < 11; $t++) {
				for ($d = 0, $c = 0; $c < $t; $c++) {
					$d += $cpf{$c} * (($t + 1) - $c);
				}
				$d = ((10 * $d) % 11) % 10;
				if ($cpf{$c} != $d) {
					return "cpf invalido<br>";
				}
			}
			return true;	}
		}
	}


	function validar_senha($senha,$senha_conf){
		$senha=strip_tags($senha);
		$senha_conf=strip_tags($senha_conf);

		if ((strlen(trim ($senha))<8)||(strlen(trim ($senha))>16)) {
			return "Preencha o campo senha com no minimo 8 caracteres e máximo 16."."<br>";
		}

		if(is_numeric($senha)){
			return "senha invalida<br>"; 
		}

		if($senha!=$senha_conf) {
			return "senha nao confirmada!";
		}

		return true;		
	}



	function validar_data($data){
		$data=strip_tags($data);
		$d = DateTime::createFromFormat('d/m/Y', $data);
		if($d && $d->format('d/m/Y') == $data){
			return true;
		}else{
			return "data invalida "."<br>";
		}
	}

	?>