<?php 


$senha = $_POST['senha'];
$senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);
$confirmarSenha= $_POST['confirmarSenha'];

password_verify ( string $senha,string $senhaCriptografada):boolean;

if (password_verify($confirmarSenha, $senhaCriptografada)) {
	echo "Senha correta";
} else{
	echo "Senha Incorreta";
}

?>