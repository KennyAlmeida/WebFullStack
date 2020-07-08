<?php 
session_start();
if (isset($_SESSION["contador"])) {
	echo "Valor do contador: ", $_SESSION["contador"];
}else{
	echo "Variavel não iniciada!";
}


?>