<?php 
session_start();

if (!isset($_SESSION['contador'])) {
	$_SESSION['contador']=0;
}


if (isset($_POST['tipo']) && $_POST['tipo'] === 'Reiniciar') {
	$_SESSION['contador']=0;
}

if (isset($_POST['tipo']) && $_POST['tipo'] === 'Aumentar') {
	$_SESSION['contador']++;
}
 ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
	<button type="submit" name="tipo" value="Reiniciar">Reiniciar</button>
	<button type="submit" name="tipo" value="Aumentar">Aumentar</button>
	</form>

	<a href="/mostrar.php">Mostrar</a>

</body>
</html>

