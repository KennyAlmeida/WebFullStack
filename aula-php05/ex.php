<?php 
$senha= "curso123";
$senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);

password_verify($senha, $senhaCriptografada);

echo $senhaCriptografada;

?>